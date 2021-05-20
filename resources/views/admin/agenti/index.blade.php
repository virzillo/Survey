@extends('layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div> {{$page_title}}
                        <div class="page-title-subheading">{{$page_description}} </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="main-card mb-3 card">
                    <div class="card-header">Crea Agente</div>
                    <div class="card-body">
                        {{-- <h5 class="card-title">Crea Agente</h5> --}}
                        <form method="POST" action="{{ route('crea.utente') }}">

                            @csrf
                            <div class="position-relative form-group">
                                <label for="exampleEmail"
                                    class="">Nome</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            <div class="position-relative form-group">
                                <label for="exampleEmail"
                                    class="">Email</label>
                                    <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror</div>
                            <div class="position-relative form-group">
                                <label for="examplePassword"
                                    class="">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword"
                                    class="">Conferma Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="examplePassword"
                                        class="">Seleziona ruolo</label>
                                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="role">
                                            @foreach ($roles as $role)
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                            <button type="submit" class="mt-1 btn btn-primary">Inserisci</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Elenco agenti</h5>
                        <table class="table table-bordered table-vertical-center" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ruolo</th>
                                    <th>Data</th>

                                    <th>Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->getRoleNames()->first()}}</td>
                                    <td>{{$user->created_at->format('d/m/Y')}}</td>

                                    <td class="warning" nowrap>
                                        <form action="{{route('elimina.utente', $user->id)}}" method="POST"
                                            id="form-delete">

                                            @method('delete')
                                            @csrf
                                            <a href="utenti/{{$user->id}}"
                                                class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                                title="Visualizza">
                                                <span class="svg-icon svg-icon-md">
                                                    {{-- {{Metronic::getSVG("media/svg/icons/General/Edit.svg")}} --}}

                                                </span>
                                            </a>
                                            <button type="button"
                                                class="btn btn-icon btn-light btn-hover-danger btn-sm "
                                                id="confirm-delete">
                                                <span class="svg-icon svg-icon-md">
                                                    {{-- {{Metronic::getSVG("media/svg/icons/General/Trash.svg")}} --}}

                                                </span>
                                            </button>

                                        </form>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agenti</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
@csrf

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> --}}
