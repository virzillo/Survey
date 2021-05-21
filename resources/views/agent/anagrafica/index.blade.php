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
                <div class="page-title-actions">
                    {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button> --}}
                    {{-- <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow xdropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            CREA NUOVO
                        </button>

                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Survey</div>
                            <div class="widget-subheading">Da completare</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>50</span></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Clients</div>
                            <div class="widget-subheading">Total Clients Profit</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>$ 568</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Followers</div>
                            <div class="widget-subheading">People Interested</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>46%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Crea Anagrafica</h5>
                    <form method="POST" action="">

                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Nome struttura</label>
                                    <input name="titolo" id="" placeholder="inserisci titolo survey" type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="" class="">Perc Cessione</label>
                                    <input name="descrizione" id="" placeholder=" " type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-2">
                            <div class="position-relative form-group"><label for="" class="">Limite</label>
                                <input name="limite" id="" placeholder="numero max" type="number" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Nome struttura</label>
                                    <input name="titolo" id="" placeholder="inserisci titolo survey" type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="" class="">Perc Cessione</label>
                                    <input name="descrizione" id="" placeholder=" " type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-2">
                            <div class="position-relative form-group"><label for="" class="">Limite</label>
                                <input name="limite" id="" placeholder="numero max" type="number" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Interlocutore</label>
                                    <input name="titolo" id="" placeholder="inserisci titolo survey" type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="" class="">Specializzazione</label>
                                    <input name="descrizione" id="" placeholder=" " type="text" class="form-control"></div>
                            </div>
                            <div class="col-md-2">
                            <div class="position-relative form-group"><label for="" class="">Limite</label>
                                <input name="limite" id="" placeholder="numero max" type="number" class="form-control"></div>
                            </div>
                        </div>

                        <button type="submit" class="mt-2 btn btn-primary">Crea</button>
                    </form>
                </div>
            </div>
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Elenco Anagrafiche</h5>
                        <table class="mb-0 table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Stato</th>
                                <th>Azioni</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($surveys as $survey)
                                <tr>
                                    <th scope="row">{{$survey->id}}</th>
                                    <td>{{$survey->titolo}}</td>
                                    <td>{{$survey->descrizione}}</td>
                                    <td>{{$survey->limite}}</td>
                                    <td><a href="{{route('questions.show', $survey->id )}}" >modifica domande</a></td>

                                </tr>
                                @endforeach --}}
                                <tr>
                                    <th scope="row">id</th>
                                    <td>mario rossi</td>
                                    <td>da iniziare</td>

                                    <td><a href="" >Avvia Survey</a></td>

                                </tr>
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
