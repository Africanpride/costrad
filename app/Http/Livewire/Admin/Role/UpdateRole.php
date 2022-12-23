<?php


namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use App\Models\Permission;
use LivewireUI\Modal\ModalComponent;


class UpdateRole extends ModalComponent
{

    public $name;
    public $description;
    public $permissions;
    public array $rolePermissions = [];
    public Role $role;
    public $permissionIds;


    // protected $rules = [
    //     'name' => 'unique:roles,email_address,'.$user->id,
    //     'description' => ['nullable', 'string', 'min:3', 'max:255'],
    // ];


    public function mount(Role $role)
    {

        $this->role = $role;
        $this->name = $role->name;
        $this->description = $role->description;
        $this->permissionIds = $role->permissions->pluck('id')->toArray();
        $this->permissions = Permission::all();
        // $this->permissions  = Permission::all()->pluck('id');
    }


    public function updateRole(Role $role)
    {

        $validated = $this->validate([
            'name' => 'required|unique:roles,name,'.$this->role->id,
            'description' => 'nullable|min:3',
        ]);
        $role->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->role->syncPermissions($this->rolePermissions);
        // $this->role()->sync($this->rolePermissions);

        return redirect()->to('/manage-roles');

    }

    public function render()
    {
        return view('livewire.admin.role.update-role');
    }
}
