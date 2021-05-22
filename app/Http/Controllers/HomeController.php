<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Question;
use App\Models\Anagrafica;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';

        return view('dashboard', compact('page_title', 'page_description'));

    }

    public function anagrafica()
    {
        $page_title = 'Anagrafica';
        $page_description = 'Some description for the page';

        return view('agent.anagrafica.index', compact('page_title', 'page_description'));

    }

    public function anagrafiche()
    {
        $page_title = 'Anagrafiche';
        $page_description = 'Some description for the page';
        $anagrafiche = Anagrafica::all();
        $surveys=Survey::all();
        return view('admin.anagrafiche.index', compact('page_title', 'page_description', 'anagrafiche','surveys'));

    }



}
