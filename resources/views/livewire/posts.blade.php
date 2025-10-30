<div>
    
<flux:modal.trigger name="create-post">
    <flux:button>Create post</flux:button>
</flux:modal.trigger>

<livewire:post-create />
<livewire:post-edit />

<flux:modal name="delete-post" class="min-w-[22rem]">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Delete post?</flux:heading>

            <flux:text class="mt-2">
                You're about to delete this post.<br>
                This action cannot be reversed.
            </flux:text>
        </div>

        <div class="flex gap-2">
            <flux:spacer />

            <flux:modal.close>
                <flux:button variant="ghost">Cancel</flux:button>
            </flux:modal.close>

            <flux:button type="submit" variant="danger" wire:click="destroy()">Delete post</flux:button>
        </div>
    </div>
</flux:modal>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Body
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        @foreach ( $posts as $post )
        <tbody>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$post->id}}
                </th>
                <td class="px-6 py-4">
                    {{$post->title}}
                </td>
                <td class="px-6 py-4">
                    {{$post->body}}
                </td>
                <td class="px-6 py-4">
                    <flux:button variant="primary" size="sm" wire:click="edit({{$post->id}})">Edit</flux:button>
                    <flux:button variant="danger" size="sm" wire:click="delete({{$post->id}})">Delete</flux:button>
                </td>
            </tr>
        </tbody>
        @endforeach
        
    </table>
</div>

</div>
