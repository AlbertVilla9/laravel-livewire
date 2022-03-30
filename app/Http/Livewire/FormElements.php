<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormElements extends Component
{
    public $title;
    public function createArticle()
    {
        dump("Create an article with a title of '" . $this->title . "'");
    }

    public function downloadFile()
    {
        dump("Download a file!");
    }

    public function render()
    {
        return view('livewire.form-elements');
    }
}
