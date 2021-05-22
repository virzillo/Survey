<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use App\Models\Survey;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
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
        'survey_id' => 'required|min:1|string',
        'question_id' => 'required|string|min:1',
        'titolo' => 'required|string|min:1',
        'descrizione' => 'nullable',

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

    $answer= new Answer;
    $answer->titolo=$request->get('titolo');
    $answer->descrizione=$request->get('descrizione');
    $answer->risposte=$request->get('risposte');
    $answer->tipo=$request->get('tipo');

    $answer->question_id=$request->get('question_id');
    $answer->survey_id=$request->get('survey_id');


    $answer->save();

    $answers=Answer::where('survey_id',$request->get('survey_id'))->get();
    $notification = array(
        'message' => 'Risposta inserita con successo!',
        'alert-type' => 'success'
    );



    return back()->with($notification,$answers);

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


    public function risposte($id , Answer $answer)
    {

        // dd($answer);
        $page_title = 'Visualizza Risposte Survey';
        $page_description = 'Some description for the page';
        $questions=Question::where('user_id',$id)->get();
        $surveys=Survey::all();
        return view('admin.anagrafiche.show', compact('page_title', 'page_description', 'questions','surveys'));

    }

}
