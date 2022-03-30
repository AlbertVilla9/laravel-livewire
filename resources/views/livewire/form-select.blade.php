<div>
    <div>
        <h1>Select simple</h1>
        <h2>T-shirt size</h2>

        <select wire:model="size">
            <option disabled>Select a size</option>
            <option value="n">None</option>
            <option value="s">Small</option>
            <option value="m">Medium</option>
            <option value="l">Large</option>
        </select>

        <div>Size: @json($size)</div>
    </div>

    <div>
        <h1>Select multiple</h1>
        <h2>Extra swag</h2>

        <select wire:model="extras" multiple>
            <option value="bag">Bag</option>
            <option value="hat">Hat</option>
            <option value="mug">Mug</option>
            <option value="stickers">Stickers</option>
        </select>

        <div>Size: @json($extras)</div>
    </div>
</div>
