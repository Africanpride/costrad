<x-app-layout>
    <x-admin.pageheader model-name="Institutes " description="Edit Instititues <br />& College" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div class="p-4 md:p-8 space-y-4">

            <div class="container mx-auto md:p-8 mt-10">
                <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Create Newsroom</h1>
                <form action="{{ route('newsroom.store') }}" method="post" enctype="multipart/form-data" >

                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="title">Title</label>
                        <input
                            class="w-full px-3 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-300 rounded"
                            id="title" type="text" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="overview">Overview</label>
                        <textarea class="w-full px-3 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-300 rounded" id="overview"
                            rows="3" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="body">Body</label>
                        <textarea class="w-full px-3 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-300 rounded" id="body"
                            rows="6" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="featured_image">Featured Image
                            URL</label>
                        <input
                            class="w-full px-3 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-300 rounded"
                            id="featured_image" type="text" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="active">Active</label>
                        <input class="px-3 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-300"
                            id="active" type="checkbox>
                <div class="mb-4">
                        <button
                            class="w-full px-4 py-2 text-white font-bold bg-blue-500 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-600 rounded"
                            type="submit">Create Newsroom</button>
                    </div>
                </form>
            </div>

        </div>



</x-app-layout>
