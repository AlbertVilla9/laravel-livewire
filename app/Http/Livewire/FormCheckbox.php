<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormCheckbox extends Component
{
    public $showEmail = false;
    public $hobbies = [];

    public function render()
    {
        return view('livewire.form-checkbox');
    }
}
