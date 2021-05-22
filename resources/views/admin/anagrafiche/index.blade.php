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
            <div class="col-md-12 col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Elenco Anagrafiche</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome Agente</th>
                                        <th>Survey</th>
                                        <th>Nome struttura</th>
                                        <th>Interlocutore</th>
                                        <th>Stato</th>
                                        <th>Avanzamento</th>

                                        <th>Azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anagrafiche as $anagrafica)
                                        <tr>
                                            <th scope="row">{{$anagrafica->id}}</th>
                                            <th >{{$anagrafica->user->name}}</th>
                                            <th >{{$anagrafica->survey->titolo}}</th>
                                            <td>{{$anagrafica->nominativo_struttura}}</td>
                                            <td>{{$anagrafica->interlocutore}}</td>

                                            <td>{{$anagrafica->stato}}</td>
                                            <td>{{$anagrafica->avanzamento}}</td>

                                            <td class="warning" >
                                                <form action="{{route('anagrafica.destroy', $anagrafica->id)}}" method="POST"
                                                    id="form-delete">

                                                    @method('delete')
                                                    @csrf
                                                    {{-- <a href="{{route('anagrafica.edit', $anagrafica->id )}}"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                                        title="Visualizza">
                                                        <span class="svg-icon svg-icon-md">
                                                            <i class="fa fa-cog icon-gradient bg-mean-fruit"> </i>
                                                        </span>
                                                    </a> --}}
                                                    <a href="{{route('answer.risposte', $anagrafica->id )}}"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                                        title="Avvia">
                                                        <span class="svg-icon svg-icon-md">
                                                            <i class="fa fa-file-archive icon-gradient bg-happy-itmeo"> </i>
                                                        </span>
                                                    </a>
                                                    <button type="button"
                                                        class="btn btn-icon btn-light btn-hover-danger btn-sm "
                                                        id="confirm-delete" onclick="ConfirmDelete()">
                                                        <span class="svg-icon svg-icon-md">
                                                            <i class="fa fa-archive icon-gradient bg-sunny-morning"> </i>
                                                        </span>
                                                    </button>

                                                </form>

                                            </td>

                                            {{-- <td><a href="{{route('anagrafica.show', $survey->id )}}" >modifica domande</a></td> --}}

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
