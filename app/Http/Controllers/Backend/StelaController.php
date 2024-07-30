<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Stela;
use Illuminate\Http\Request;

class StelaController extends Controller
{
    public function AllStela()
    {
        $allStela = Stela::get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('backend.stela.all_stela', compact('allStela'));
    }
}
