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
                    <form method="POST" action="{{ route('anagrafica.store') }}">
                        @csrf
                        <input name="user_id" id="user_id"  type="hidden" class="form-control" value=" {{Auth::user()->id}}">

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Nominativo struttura</label>
                                    <input name="nominativo_struttura" id="nominativo_struttura" placeholder="" type="text" class="form-control" required></div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Interlocutore</label>
                                    <input name="interlocutore" id="interlocutore" placeholder="inserisci nome e cognome" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group"><label for="" class="">Percentuale Cessione</label>
                                    <select name="percentuale_cessione" id="percentuale_cessione" class="form-control" required>
                                        <option value="1-5%">1-5%</option>
                                        <option value="6-10%">6-10%</option>
                                        <option value="11-20%">11-20%</option>
                                        <option value=">20%">>20%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Potenziale struttura</label>
                                    <select name="potenziale_struttura" id="otenziale_struttura" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Specializzazione</label>
                                    <select name="specializzazione" id="specializzazione" class="form-control" required>
                                        <option value="ANESTESIA">ANESTESIA</option>
                                        <option value="CHIRURGIA">CHIRURGIA</option>
                                        <option value="ORTOPEDIA">ORTOPEDIA</option>
                                        <option value="FISIOTERAPIA">FISIOTERAPIA</option>
                                        <option value="MEDICINA">MEDICINA</option>
                                        <option value="INTERNA">INTERNA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Profilo interlocutore</label>
                                    <select name="profilo" id="profilo" class="form-control" required>
                                        <option value="BUSINESS">BUSINESS</option>
                                        <option value="CLIENTE">CLIENTE</option>
                                        <option value="SCIENZA">SCIENZA</option>
                                        <option value="PAZIENTE">PAZIENTE</option>
                                        <option value="IMMAGINE">IMMAGINE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Mezzi diagnostici a disp.</label>
                                    <select name="mezzi_diagnostici" id="mezzi_diagnostici" class="form-control" required>
                                        <option value="RX">RX</option>
                                        <option value="TAC">TAC</option>
                                        <option value="RM">RM</option>
                                        <option value="ARTROSCOPIA">ARTROSCOPIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Assegna survey disp.</label>
                                    <select name="survey_id" id="survey_id" class="form-control" required>
                                        @foreach ($surveys as $survey)
                                        <option value="{{$survey->id}}">{{$survey->titolo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="mt-2 btn btn-primary">Crea</button>
                    </form>
                </div>
            </div>
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Elenco Anagrafiche</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome struttura</th>
                                        <th>Interlocutore</th>
                                        <th>Stato</th>
                                        <th>Tipo</th>

                                        <th>Azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anagrafiche as $anagrafica)
                                        <tr>
                                            <th scope="row">{{$anagrafica->id}}</th>
                                            <td>{{$anagrafica->nominativo_struttura}}</td>
                                            <td>{{$anagrafica->interlocutore}}</td>

                                            <td>{{$anagrafica->stato}}</td>
                                            <td>{{$anagrafica->tipo}}</td>

                                            <td class="warning" >
                                                <form action="{{route('anagrafica.delete', $anagrafica->id)}}" method="POST"
                                                    id="form-delete">

                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{route('anagrafica.edit', $anagrafica->id )}}"
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


@push('script')
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
