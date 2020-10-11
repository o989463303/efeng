<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class admin extends Controller {
    //admin@index
    public function index() {
        return view('index');
    }
}