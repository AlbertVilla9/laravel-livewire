<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormSelect extends Component
{
    public $size='l';
    public $extras=[];

    public function render()
    {
        return view('livewire.form-select');
    }
}
