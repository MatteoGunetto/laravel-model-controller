<?php
namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// import Model
use App\Models\Movie;
class PageController extends Controller
{
    public function index () {
        $movies= movie::all();
        // prova dd per importazione corretta database
        dd($movies);

    return view('welcome', compact('movies'));
}
}
