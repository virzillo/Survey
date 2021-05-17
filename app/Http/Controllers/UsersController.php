<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RedirectsUsers;

class UsersController extends Controller
{


    use RedirectsUsers;

    protected $redirectTo = 'admin/utenti';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $notification = array(
            'message' => 'Utente creato con successo!',
            'alert-type' => 'success'
        );

        return redirect(action('UsersController@index'))->with($notification);
    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Utenti';
        $page_description = 'Some description for the page';
        $users = User::all();
        return view('users.index', compact('page_title', 'page_description', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Crea Utente';
        $page_description = 'Some description for the page';
        $roles = Role::all();
        return view('backend.users.create', compact('page_title', 'page_description', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Visualizza Utente';
        $page_description = 'Some description for the page';
        $user = User::where('id', $id)->first();
        $roles = Role::all();
        return view('backend.users.show', compact('page_title', 'page_description', 'user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Modifica Utente';
        $page_description = 'Some description for the page';
        $user = User::find($id);
        return view('backend.users.edit', compact('page_title', 'page_description', 'user'));
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
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|string',
            'password'=>'confirmed'
        ]);

            $notifications=$validator->errors();
        if ($validator->fails()) {
            dd($validator);
            return back()
                        ->withErrors($validator)

                        ->withInput()->with($notifications);
        }

        $user = User::find($request->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('password')){
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();

        $notification = array(
            'message' => 'Servizio modificato con successo!',
            'alert-type' => 'success'
        );
        return redirect(action('ServiceController@index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        //elimina utente e immagine associata ad esso
        // Storage::delete('public/user_image/'.$user->user_image);

        $notification = array(
            'message' => 'Utente eliminato con successo!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}