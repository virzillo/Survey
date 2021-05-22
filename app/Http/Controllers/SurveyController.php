<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
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
        $page_title = 'Survey';
        $page_description = 'Some description for the page';
        $surveys = Survey::all();
        return view('admin.survey.index', compact('page_title', 'page_description', 'surveys'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {

        $page_title = 'Domande';
        $page_description = 'Some description for the page';
        $users = User::all();
        return view('admin.survey.create', compact('page_title', 'page_description', 'users','surveyId'));
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
            'titolo' => 'required|min:2|string',
            'descrizione' => 'string|min:2',
            'limite' => 'min:1',

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

        $survey= new Survey;
        $survey->titolo=$request['titolo'];
        $survey->descrizione=$request['descrizione'];
        $survey->limite=$request['limite'];


        $survey->save();

        $surveyId = $survey->id;



        $notification = array(
            'message' => 'Survey inserito con successo!',
            'alert-type' => 'success'
        );

        $survey = DB::table('surveys')->latest()->first();

        $page_title = 'creato Domande';
        $page_description = 'Some description for the page';
        // $survey = Survey::where('id',$survey->id);
        // dd( $notification);
        return view('admin.questions.show', compact('page_title', 'page_description', 'survey','notification'))->with($notification);
        // return redirect(action('SurveyController@listadomande'))->with($notification);
        //return redirect(action('QuestionsController@create'))->with($notification);


    }


    public function listadomande( )
    {

        $survey = DB::table('surveys')->latest()->first();

        $page_title = 'creato Domande';
        $page_description = 'Some description for the page';
        // $survey = Survey::where('id',$survey->id);

        return view('admin.questions.create', compact('page_title', 'page_description', 'survey'));
    }

    public function modificadomande($id)
    {

        $page_title = 'lista domande Domande';
        $page_description = 'Some description for the page';

        $survey=Survey::find($id);
        $questions=Question::where('survey_id','=',$survey->id)->get();
        return view('admin.survey.show', compact('page_title', 'page_description', 'survey' ,'questions'));
    }

    public function inseriscidomande(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:2|string',

            'descrizione' => 'string|min:2',
            'tipo' => 'min:1',

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

        $question= new Question;
        $question->survey_id=$request['survey_id'];
        $question->titolo=$request['titolo'];
        $question->descrizione=$request['descrizione'];
        $question->tipo=$request['tipo'];
        $question->opzione1=$request['opzione1'];
        $question->opzione2=$request['opzione2'];
        $question->opzione3=$request['opzione3'];
        $question->opzione4=$request['opzione4'];
        $question->opzione5=$request['opzione5'];
        $question->opzione6=$request['opzione6'];


        $question->save();

        $page_title = 'Domande';
        $page_description = 'Some description for the page';

        $survey=Survey::find( $question->survey_id);

        return view('admin.survey.create', compact('page_title', 'page_description', 'survey','question'));



        // $notification = array(
        //     'message' => 'Survey inserito con successo!',
        //     'alert-type' => 'success'
        // );



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:2|string',
            'descrizione' => 'string|min:2',
            'limite' => 'min:1',
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

        $survey->update($request->all());

        dd($request);
        $survey = Survey::find($survey->id);
        $survey->titolo = $request->get('titolo');
        $survey->descrizione = $request->get('descrizione');
        $survey->limite = $request->get('limite');


        // $survey->pubblicato = $request->get('pubblicato');

        $survey->save();

        $notification = array(
            'message' => 'Slider modificato con successo!',
            'alert-type' => 'success'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {

        // dd($survey);

        $survey->delete();
        $notification = array(
            'message' => 'Survey eliminato con successo!',
            'alert-type' => 'success'
        );
        $questions=Question::where('survey_id','=',$survey->id);
        $questions->delete();
        return back()->with($notification);
    }
}
