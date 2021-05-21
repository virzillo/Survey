<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Anagrafica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnagraficaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Anagrafica';
        $page_description = 'Some description for the page';
        $anagrafiche = Anagrafica::all();
        $surveys=Survey::all();
        return view('agent.anagrafica.index', compact('page_title', 'page_description', 'anagrafiche','surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nominativo_struttura' => 'required|min:2|string',
            'percentuale_cessione' => 'required|string|min:1',
            'interlocutore' => 'required|string|min:1',
            'specializzazione' => 'required|string|min:1',
            'profilo' => 'required|string|min:1',
            'mezzi_diagnostici' => 'required|string|min:1',
        ]);

        if ($validator->fails()) {

            $notification = array(
                'message' => $validator->errors(),
                'alert-type' => 'error'
            );

            return back()
                        ->with($notification)
                        ->withErrors($validator)
                        ->withInput();
        }

        $anagrafica= new Anagrafica;
        $anagrafica->nominativo_struttura=$request['nominativo_struttura'];
        $anagrafica->percentuale_cessione=$request['percentuale_cessione'];
        $anagrafica->interlocutore=$request['interlocutore'];
        $anagrafica->specializzazione=$request['specializzazione'];
        $anagrafica->profilo=$request['profilo'];
        $anagrafica->mezzi_diagnostici=$request['mezzi_diagnostici'];
        $anagrafica->stato='Non avviato';
        $anagrafica->note=$request['note'];

        $anagrafica->user_id=$request['user_id'];
        $anagrafica->survey_id=$request['survey_id'];


        $anagrafica->save();



        $notification = array(
            'message' => 'Anagrafica inserito con successo!',
            'alert-type' => 'success'
        );



        $page_title = 'Anagrafiche';
        $page_description = 'Some description for the page';
        return back()->with($notification);
       // return view('admin.questions.create', compact('page_title', 'page_description', 'survey','notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
