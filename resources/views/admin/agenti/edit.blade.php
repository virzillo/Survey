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
        @include('layouts.flashmessage')

        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">MODIFICA AGENTE</h5>

                        <form method="POST" action="{{ route('agente.update' , $user->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Nome</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $user->email }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror</div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">Conferma Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="">Seleziona ruolo</label>
                                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="role">
                                            <option value="{{$user->getRoleNames()->first()}}">{{$user->getRoleNames()->first()}}</option>

                                            @foreach ($roles as $role)
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="mt-1 btn btn-primary">Modifica</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card ">
                    <div class="card-body">
                        <h5 class="card-title">Elenco agenti</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ruolo</th>
                                    <th>Azioni</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->getRoleNames()->first()}}</td>
                                        <td class="warning" >
                                            <form action="{{route('agente.destroy', $user->id)}}" method="POST"
                                                id="form-delete">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('agente.edit',$user->id )}}"
                                                    class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                                    title="Visualizza">
                                                    <span class="svg-icon svg-icon-md">
                                                        <i class="fa fa-cog icon-gradient bg-mean-fruit"> </i>
                                                    </span>
                                                </a>
                                                <button type="button"
                                                    class="btn btn-icon btn-light btn-hover-danger btn-sm "
                                                    id="confirm-delete">
                                                    <span class="svg-icon svg-icon-md">
                                                        <i class="fa fa-archive icon-gradient bg-sunny-morning"> </i>
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
        </div>
        {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection


@push('script')

<script>

    $("button#confirm-delete").click(function(e) {
        event.preventDefault();
        Swal.fire({
            title: "Sei sicuro?",
            text: "Stai per eliminare un record!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Si!!"
        }).then(function(result) {
            if (result.value) {
                $("#form-delete").submit();
            }
        });
    });

</script>
@endpush
