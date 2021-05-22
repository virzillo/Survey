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
        <div class="row">
            <div class="col-lg-8">
                <div class="main-card mb-3 card ">
                    <div class="card-body">
                        <h5 class="card-title">Survey</h5>
                        {{-- <div class="col-md-12 col-lg-12"> --}}
                            <div id="accordion" class="accordion-wrapper mb-3">
                               <?php
                                $i=0;
                                $n=0;
                                $b=0;
                                ?>
                            @foreach ($questions as $question)
                                <?php
                                $i++;
                                $n++;
                                ?>

                                <div class="card">
                                    <div id="heading{{$i}}" class="card-header">
                                        <button type="button" data-toggle="collapse" data-target="#collapse{{$i}}1" aria-expanded="false" aria-controls="collapse{{$i}}" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
                                            <h5 class="m-0 p-0">Domanda {{$i}}</h5>
                                        </button>
                                    </div>
                                    <div data-parent="#accordion" id="collapse{{$i}}1" aria-labelledby="heading{{$i}}" class="collapse" style="">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('answer.store') }}" >
                                                @csrf
                                                <input name="survey_id" id="survey_id"  type="hidden" class="form-control" value=" {{$survey->id}}">
                                                <input name="question_id" id="question_id"  type="hidden" class="form-control" value=" {{$question->id}}">

                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="" class="">Titolo: {{$question->titolo}}</label>
                                                            <input name="titolo" id="" placeholder=""  type="hidden" class="form-control" value="{{$question->titolo}}" readonly></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">

                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="" class="">Suggerimento: {{$question->descrizione}}</label>
                                                            <input name="descrizione" id="" placeholder=" "  type="hidden"  class="form-control" value="{{$question->descrizione}}" readonly></div>
                                                    </div>

                                                </div>
                                                <h5 class="card-title">Risposte</h5>


                                                <div class="form-row">
                                                    @if ($question->tipo=='radiobutton')
                                                    <div class="position-relative form-group">
                                                        <div>
                                                            @foreach ($question->opzione as $key=>$item)
                                                            @if(isset($question->answer->risposte))
                                                            <div class="custom-radio custom-control custom-control-inline">
                                                                <input type="radio" id="risposte{{$n}}" name="risposte"
                                                                class="custom-control-input" {{ $question->answer->risposte === $item ? "checked" : "" }}
                                                                value="{{$item}}">
                                                                <label class="custom-control-label" for="risposte{{$n}}">{{$item}}</label><br>
                                                                </div>
                                                                <?php $n++; ?>
                                                            @else
                                                            <div class="custom-radio custom-control custom-control-inline">
                                                                <input type="radio" id="risposte{{$n}}" name="risposte"
                                                                class="custom-control-input"
                                                                value="{{$item}}">
                                                                <label class="custom-control-label" for="risposte{{$n}}">{{$item}}</label><br>
                                                                </div>
                                                                <?php $n++; ?>
                                                            @endif

                                                            @endforeach

                                                        </div>
                                                    </div>
                                                    {{-- <fieldset class="position-relative form-group">
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione1}}</label>
                                                        </div>
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione2}}</label>
                                                        </div>
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione3}}</label>
                                                        </div>
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione4}}</label>
                                                        </div>
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione5}}</label>
                                                        </div>
                                                        <div class="position-relative form-check">
                                                            <label class="form-check-label">
                                                                <input name="radio1" type="radio" class="form-check-input" value="{{$question->opzione1}}">{{$question->opzione6}}</label>
                                                        </div>
                                                    </fieldset> --}}
                                                    @else
                                                    <div class="position-relative form-group">
                                                        <div>
                                                        @foreach ($question->opzione as $key=>$item)
                                                        @if(isset($question->answer->risposte[$key]))
                                                            <div class="custom-checkbox custom-control custom-control-inline">
                                                                <input type="checkbox" id="risposte{{$n}}" name="risposte[]"
                                                                 class="custom-control-input"  {{ $question->answer->risposte[$key] === $item ? "checked" : "" }}
                                                                 value="{{$item}}">
                                                                <label class="custom-control-label" for="risposte{{$n}}" >{{$item}}</label>
                                                            </div>
                                                            <?php $n++; ?>
                                                            @else
                                                            <div class="custom-checkbox custom-control custom-control-inline">
                                                                <input type="checkbox" id="risposte{{$n}}" name="risposte[]"
                                                                 class="custom-control-input"
                                                                 value="{{$item}}">
                                                                <label class="custom-control-label" for="risposte{{$n}}" >{{$item}}</label>
                                                            </div>
                                                            <?php $n++; ?>
                                                        @endif

                                                        @endforeach
                                                        </div>
                                                    </div>
                                                    @endif


                                                    {{-- <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione1" id="" placeholder="" type="text" class="form-control" value="{{$question->opzione1}}"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione2" id="" placeholder=" " type="text" class="form-control"  value="{{$question->opzione2}} "></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione3" id="" placeholder=" " type="text" class="form-control"  value="{{$question->opzione3}} "></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione4" id="" placeholder=" " type="text" class="form-control"  value="{{$question->opzione4}}" ></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione5" id="" placeholder=" " type="text" class="form-control"  value="{{$question->opzione5}}" ></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <input name="opzione6" id="" placeholder=" " type="text" class="form-control"  value="{{$question->opzione6}}" ></div>
                                                    </div> --}}
                                                </div>
                                                @if(isset($question->answer))
                                                <button type="submit" class="mt-2 btn btn-primary" disabled>Salva</button>

                                                @else
                                                <button type="submit" class="mt-2 btn btn-primary">Salva</button>

                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            @endforeach


                            </div>
                        {{-- </div> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Note</h5>
                        <form method="POST" action="{{ route('anagrafica.update', $anagrafica->id) }}">
                            @method('PUT')
                            @csrf
                            <input name="user_id" id="user_id"  type="hidden" class="form-control" value=" {{Auth::user()->id}}">

                                <div class="position-relative form-group">
                                    <textarea name="note" id="note" class="form-control">{{ $anagrafica->note}}</textarea>
                                </div>

                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Avanzamento</label>
                                <select name="avanzamento" id="avanzamento" class="form-control" required>

                                    <option value="in corso">In corso</option>
                                    <option value="concluso">Concluso</option>
                                </select>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Salva</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
       {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection


@push('script')


@endpush
