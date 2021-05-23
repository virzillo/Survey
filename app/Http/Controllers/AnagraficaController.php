<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Answer;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Anagrafica;
use App\Models\SurveyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $anagrafiche = Anagrafica::where('user_id', Auth::user()->id)->get();
        $totale=Anagrafica::where('user_id', Auth::user()->id)->where('avanzamento','concluso')->get()->count();
        // dd($totale);
        $surveys=Survey::with('users')->get();

        // $surveys=Survey::with('questions')->get();
        // $questions=Question::with('answer')->get();
        // dd($questions);
        return view('agent.anagrafica.index', compact('page_title', 'page_description', 'anagrafiche','surveys','totale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $page_title = 'Avvia Survey';
        $page_description = 'Some description for the page';
        $anagrafica = Anagrafica::find($id);
        $surveys = Survey::all();
        // $answers=Answer::where('survey_id',$anagrafica->survey_id)->where('user_id',Auth::user()->id)->where('anagrafica_id', $anagrafica->id)->get();
        $forms=Form::where('survey_id',$anagrafica->survey_id)->where('user_id',Auth::user()->id)->where('anagrafica_id', $anagrafica->id)->get();


        $survey=Survey::find($anagrafica->survey_id);
        // $questions=Question::with('answers')->where('survey_id','=',$anagrafica->survey_id)->get();
        $questions=Question::where('survey_id','=',$anagrafica->survey_id)->get();
        return view('agent.anagrafica.create', compact('page_title', 'page_description', 'anagrafica','survey','surveys','questions','forms'));
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
            'potenziale_struttura' => 'required|min:1|string',
            'percentuale_cessione' => 'required|string|min:1',
            'interlocutore' => 'required|string|min:1',
            'specializzazione' => 'required|string|min:1',
            'profilo' => 'required|string|min:1',
            'mezzi_diagnostici' => 'required|string|min:1',
        ]);

        //VALIDAZIONE DATI CONTROLLO ERRORI
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

        //CONTROLLO ANAGRAFICA GIA ASSOCIATA A SURVEY
        $controllo=Anagrafica::where('interlocutore',$request->get('interlocutore'))->where('survey_id',$request->get('survey_id'))->count();
        if ($controllo>0) {

            $notification = array(
                'message' => 'Anagrafica già associata al survey selezionato.',
                'alert-type' => 'error'
            );

            return back()
                        ->with($notification)
                        ->withErrors($validator)
                        ->withInput();
        }


        $anagrafica= new Anagrafica;
        $anagrafica->nominativo_struttura=$request['nominativo_struttura'];
        $anagrafica->potenziale_struttura=$request['potenziale_struttura'];
        $anagrafica->percentuale_cessione=$request['percentuale_cessione'];
        $anagrafica->interlocutore=$request['interlocutore'];
        $anagrafica->specializzazione=$request['specializzazione'];
        $anagrafica->profilo=$request['profilo'];
        $anagrafica->mezzi_diagnostici=$request['mezzi_diagnostici'];
        $anagrafica->note=$request['note'];

        $anagrafica->user_id=$request['user_id'];
        $anagrafica->survey_id=$request['survey_id'];



        $anagrafica->save();

        //aggiunge relazione
        $pivot=new SurveyUser;
        $pivot->survey_id=$request->get('survey_id');
        $pivot->user_id=$request->get('user_id');
        $pivot->save();


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
        $page_title = 'Avvia Survey';
        $page_description = 'Some description for the page';
        $anagrafica = Anagrafica::find($id);
        $surveys = Survey::all();
        $answers=Answer::where('survey_id',$anagrafica->survey_id)->where('user_id',Auth::user()->id)->where('anagrafica_id', $anagrafica->id)->get();
        //dd($answers);
        $survey=Survey::find($anagrafica->survey_id);
        $questions=Question::with('answers')->where('survey_id','=',$anagrafica->survey_id)->get();
        return view('agent.anagrafica.edit', compact('page_title', 'page_description', 'anagrafica','survey','surveys','questions','answers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anagrafica $anagrafica)
    {
        // $validator = Validator::make($request->all(), [
        //     'nominativo_struttura' => 'required|min:2|string',
        //     'potenziale_struttura' => 'required|min:1|string',
        //     'percentuale_cessione' => 'required|string|min:1',
        //     'interlocutore' => 'required|string|min:1',
        //     'specializzazione' => 'required|string|min:1',
        //     'profilo' => 'required|string|min:1',
        //     'mezzi_diagnostici' => 'required|string|min:1',
        // ]);

        // if ($validator->fails()) {

        //     $notification = array(
        //         'message' => $validator->errors(),
        //         'alert-type' => 'error'
        //     );

        //     return back()
        //                 ->with($notification)
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $anagrafica->update($request->all());

        $notification = array(
            'message' => 'Salvataggio riuscito!',
            'alert-type' => 'success'
        );
        return back()->with($notification);

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
