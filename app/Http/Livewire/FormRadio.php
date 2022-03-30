<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormRadio extends Component
{
    public $sendNewsletter;
    public function render()
    {
        return view('livewire.form-radio');
    }
}
