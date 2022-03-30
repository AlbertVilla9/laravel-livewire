<?php
namespace App\Http\Controllers;

class FormsController extends Controller
{
    public function createArticle()
    {
        dump("Create an article with a title of '" . request()->get('title') . "'");
    }

    public function downloadFile()
    {
        dump("Download a file!");
    }
}
?>