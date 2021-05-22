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

                </div>
            </div>
        </div>
        {{-- <div class="row">
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

        </div> --}}

        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Anagrafica</h5>
                        <form method="POST" action="{{ route('anagrafica.update', $anagrafica->id) }}">
                            @method('PUT')
                            @csrf
                            <input name="user_id" id="user_id"  type="hidden" class="form-control" value=" {{Auth::user()->id}}">

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Nominativo struttura</label>
                                        <input name="nominativo_struttura" id="nominativo_struttura" placeholder="" type="text" class="form-control" value="{{$anagrafica->nominativo_struttura}}" required></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Interlocutore</label>
                                        <input name="interlocutore" id="interlocutore" placeholder="inserisci nome e cognome" type="text" class="form-control" value="{{$anagrafica->interlocutore}}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group"><label for="" class="">Percentuale Cessione</label>
                                        <select name="percentuale_cessione" id="percentuale_cessione" class="form-control" required>
                                            <option value="{{$anagrafica->percentuale_cessione}}">{{$anagrafica->percentuale_cessione}}</option>

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
                                            <option value="{{$anagrafica->potenziale_struttura}}">{{$anagrafica->potenziale_struttura}}</option>

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
                                            <option value="{{$anagrafica->specializzazione}}">{{$anagrafica->specializzazione}}</option>

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
                                            <option value="{{$anagrafica->profilo}}">{{$anagrafica->profilo}}</option>

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
                                            <option value="{{$anagrafica->mezzi_diagnostici}}">{{$anagrafica->mezzi_diagnostici}}</option>

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
                                            <option value="{{$anagrafica->survey_id}}">{{$anagrafica->survey->titolo}}</option>
                                            @foreach ($surveys as $survey)
                                            <option value="{{$survey->id}}">{{$survey->titolo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="mt-2 btn btn-primary">Modifica</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if (($anagrafica->avanzamento=='in corso'))

        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card ">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Survey</h5> --}}
                        <?php
                        $i=0;
                        $n=0;
                        $b=0;
                        ?>
                        <form method="POST" action="{{ route('form.store') }}" >

                            @csrf
                            <input name="survey_id" id="survey_id"  type="hidden" class="form-control" value=" {{$survey->id}}">
                            <input name="user_id" id="user_id"  type="hidden" class="form-control" value=" {{Auth::user()->id}}">
                            <input name="anagrafica_id" id="anagrafica_id"  type="hidden" class="form-control" value=" {{$anagrafica->id}}">


                    <ul class="list-group">



                        @foreach ($questions as $question)
                            <li class="list-group-item">
                            <?php
                            $i++;
                            $n++;
                            ?>
                             <input name="domande[{{$i}}]" id="domande[{{$i}}]"  type="hidden" class="form-control" value=" {{$question->titolo}}">
                             <h5 class="card-title">{{$i}} - {{$question->titolo}}</h5>
                            <div class="position-relative form-group ">

                                <small class="form-text text-muted">{{$question->descrizione}} </small><br>
                            </div>

                            {{-- --}}
                            <div class="form-row">
                            @if ($question->tipo=='radiobutton')
                                <div class="position-relative form-group">
                                    <div class="ml-2">
                                        <fieldset id="group1">

                                          </fieldset>
                                        <fieldset id="risposte[{{$question->id}}][{{$i}}]">
                                        @foreach ($question->opzione as $key=>$item)
                                        <div class="custom-radio custom-control custom-control-inline mb-1 pl-2">
                                            <div class="position-relative form-check">
                                                <label class="form-check-label">
                                                    <input value="{{$item}}" name="risposte[{{$question->id}}][{{$i}}]" type="radio" class="form-check-input"> {{$item}}
                                                </label>
                                            </div>

                                            </div>
                                            @endforeach
                                            <?php $n++; ?>
                                        </fieldset>
                                    </div>
                                </div>

                            @else
                                <div class="position-relative form-group">
                                    <div class="ml-2">

                                    @foreach ($question->opzione as $key=>$item)

                                        <div class="custom-checkbox custom-control custom-control-inline mb-1">
                                            <input type="checkbox" id="risposte[{{$question->id}}][{{$n}}]" name="risposte[{{$question->id}}][{{$n}}]"
                                             class="custom-control-input" value="{{$item}}">
                                            <label class="custom-control-label" for="risposte[{{$question->id}}][{{$n}}]" >{{$item}}</label>
                                        </div>
                                        <?php $n++; ?>


                                    @endforeach
                                    </div>
                                </div>
                            @endif

                            </div>

                           </li>
                        @endforeach
                    </ul>
                    <div class="position-relative form-group">
                        <h5 class="card-title">Note</h5>
                        <textarea name="note" id="note" class="form-control" rows="10">{{ $anagrafica->note}}</textarea>
                    </div>
                        <button class="mt-3 btn btn-primary">Salva</button>
                    </form>


                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Note</h5>
                        <form method="POST" action="{{ route('anagrafica.update', $anagrafica->id) }}">
                            @method('PUT')
                            @csrf
                            <input name="user_id" id="user_id"  type="hidden" class="form-control" value=" {{Auth::user()->id}}">

                                <div class="position-relative form-group">
                                    <textarea name="note" id="note" class="form-control" rows="10">{{ $anagrafica->note}}</textarea>
                                </div>

                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Avanzamento</label>
                                <select name="avanzamento" id="avanzamento" class="form-control" required>

                                    <option value="in corso">In corso</option>
                                    <option value="concluso">Concluso</option>
                                </select>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Salva</button>


                    </div>
                </div>
            </div> --}}
        </div>
        @else
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>

                        </div>
                    </div>
                    <div class="card-body">

                        @foreach ($forms as $form)

                            @foreach ($form->risposte as $key => $value)
                            {{ $key }}

                            @if (is_array($value))
                              @foreach ($value as $ri)
                              {{ $ri }}
                              @endforeach


                            @endif
                            <br>
                            @endforeach

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        @endif
       {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection


@push('script')


@endpush
