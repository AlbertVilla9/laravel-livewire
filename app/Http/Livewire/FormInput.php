<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormInput extends Component
{
    public $message = '';
    public $uppCase;

    public function render()
    {
        $this->uppCase = strtoupper($this->message);
        return view('livewire.form-input');
    }
}
