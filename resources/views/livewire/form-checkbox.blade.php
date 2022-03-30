<div>
    <div>
        <h1>Single Checkbox</h1>

        <label class="flex items-center">
            <input wire:model="showEmail" value="checked" type="checkbox">
        </label>
        <br>
        Email {{ var_export($showEmail) }}
    </div>

    <div>
        <h1>Grouped Checkboxes</h1>

        <label>
            <input wire:model="hobbies" name="hobbies[]" value="coding" type="checkbox">
            Coding
        </label>

        <label>
            <input wire:model="hobbies" name="hobbies[]" value="sailing" type="checkbox">
            Sailing
        </label>

        <label>
            <input wire:model="hobbies" name="hobbies[]" value="camping" type="checkbox">
            Camping
        </label>
        <br>
        Hobbies: {{ var_export($hobbies) }}
    </div>
</div>
