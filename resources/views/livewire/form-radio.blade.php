<div>
    <h1>Do you want to receive our newsletter?</h1>

    <label>
        <input type="radio" wire:model="sendNewsletter" value="yes"/>
        yes
    </label>

    <label>
        <input type="radio" wire:model="sendNewsletter" value="no"/>
        no
    </label>

    <div>Answer: {{$sendNewsletter}}</div>

</div>
