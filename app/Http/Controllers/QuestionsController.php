<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $survey = DB::table('surveys')->latest()->first();

        $page_title = 'creato Domande';
        $page_description = 'Some description for the page';
        // $survey = Survey::where('id',$survey->id);

        return view('admin.questions.create', compact('page_title', 'page_description', 'survey'));
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

        // $notification = array(
        //     'message' => 'Survey inserito con successo!',
        //     'alert-type' => 'success'
        // );


        $id=$request->get('survey_id');
        $survey=Survey::find($id);
        $questions=Question::where('survey_id','=',$id)->get();
        return view('admin.questions.show', compact('page_title', 'page_description', 'survey','questions'));




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Visualizza Domande';
        $page_description = 'Some description for the page';

        $survey=Survey::find($id);

        $questions=Question::where('survey_id','=',$survey->id)->get();
        return view('admin.questions.show', compact('page_title', 'page_description', 'survey','questions'));
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
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|min:3|max:255|string',

            'tipo' => 'required|min:1',
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

            $questions = Question::find($id);


            $questions->titolo=$request->get('titolo');
            $questions->descrizione=$request->get('descrizione');
            $questions->tipo=$request->get('tipo');
            $questions->opzione1=$request->get('opzione1');
            $questions->opzione2=$request->get('opzione2');
            $questions->opzione3=$request->get('opzione3');
            $questions->opzione4=$request->get('opzione4');
            $questions->opzione5=$request->get('opzione5');


            $questions->save();

            $notification = array(
                'message' => 'Articolo modificato con successo!',
                'alert-type' => 'success'
            );
            $page_title = 'Domande';
            $page_description = 'Some description for the page';
            $id=$request->get('survey_id');
            $survey=Survey::find($id);
            $questions=Question::where('survey_id','=',$id)->get();

           return redirect(action('SurveyController@index'))->with($id);
         // return view('admin.survey.show', compact('page_title', 'page_description', 'survey','questions','id'));

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
