<?php


namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use LivewireUI\Modal\ModalComponent;


class UpdateRole extends ModalComponent
{

    public $name;
    public $description;
    public $permission = [];

    protected $rules = [
        'name' => ['required', 'string', 'min:3', 'max:255', 'unique:roles'],
        'description' => ['nullable', 'string', 'min:3', 'max:255'],
    ];

    public Role $role;

    public function mount(Role $role)
    {
        // Gate::authorize('update', $role);

        $this->role = $role;
    }


    public function updateRole()
    {

        $validatedData = $this->validate();

        $role =  Role::create(
            [
                'name' => $this->name,
                'description' => $this->description,
            ]
        );
        $role->syncPermissions($this->permission);

        return redirect()->to('/manage-roles');
    }

    public function render()
    {
        return view('livewire.admin.role.update-role');
    }
}
