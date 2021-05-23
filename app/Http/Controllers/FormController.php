<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Anagrafica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
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
        //  'survey_id' => 'required|min:1|string',
        //  'question_id' => 'required|string|min:1',
        //  'anagrafica_id' => 'required|string|min:1',
         'domande' => 'required',
         'risposte' => 'required',

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


     $form= new Form;
     $form->risposte=$request->get('risposte');
     $form->domande=$request->get('domande');

     $form->survey_id=$request->get('survey_id');
     $form->user_id=Auth::user()->id;
     $form->anagrafica_id=$request->get('anagrafica_id');
    //  $form->question_id=$request->get('question_id');


     $form->save();



     $anagrafica=Anagrafica::find($request->get('anagrafica_id'));

     $anagrafica->note = $request->get('note');
     $anagrafica->avanzamento ='concluso';
     $anagrafica->save();



    //  $answers=Answer::where('survey_id',$request->get('survey_id'))->get();
     $notification = array(
         'message' => 'Risposta inserita con successo!',
         'alert-type' => 'success'
     );



     return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
