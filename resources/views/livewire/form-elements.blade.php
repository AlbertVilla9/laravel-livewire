<div class="p-4 mx-auto max-w-md space -y-4">
    <div class="space-y-4">
        <h1>Forms and Submit Buttons</h1>

            <label>
                Title
                <input type="text" wire:model="title" name="title"/>
            </label>

            <button class="mt-4" type="button" wire:click="createArticle">Create Article</button>
    </div>

    <div class="space-y-4">
        <h1>Action Buttons</h1>
        <button type="button" wire:click="downloadFile">Download File</button>
    </div>
</div>
