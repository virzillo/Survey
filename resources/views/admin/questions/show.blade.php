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
                    <div>INSERISCI ALTRE DOMANDE O MODIFICA ESISTENTI - Titolo Survey: {{$survey->titolo}}
                        <div class="page-title-subheading">{{$survey->descrizione}}</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                               MODIFICA INTESTAZIONE SURVEY: {{$survey->titolo}}
                        </div>
                    </div>

                    <div class="card-body">
                         {{-- MODIFICA INTESTAZIONE SURVEY --}}
                        <form method="POST" action="{{ route('survey.update',$survey->id) }}">
                            @method('PUT')
                            @csrf

                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control" value=" {{$survey->titolo}}"></div>
                                </div>
                                <div class="col-md-5">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descrizione" id="" placeholder=" " type="text" class="form-control" value=" {{$survey->descrizione}}"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <div class="position-relative form-group"><label for="" class="">Limite</label>
                                            <input name="limite" id="" placeholder=" " type="text" class="form-control" value=" {{$survey->limite}}"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword"
                                            class="">Pubblicato</label>
                                            <select class="form-control kt-select2 select2" id="pubblicato" name="pubblicato" required>
                                                @if ($survey->pubblicato=='off')
                                                <option value="off">no</option>
                                                <option value="on">si</option>
                                                @else
                                                <option value="on">si</option>
                                                <option value="off">no</option>
                                                @endif
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Modifica</button>
                        </form>
                    </div>


                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                INSERISCI DOMANDA
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('questions.store') }}">

                            @csrf
                            <input name="survey_id" id=""  type="hidden" class="form-control" value=" {{$survey->id}}">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control" required></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descrizione" id="" placeholder=" " type="text" class="form-control" ></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword"
                                            class="">Tipo risposta</label>
                                            <select class="form-control kt-select2 select2" id="kt_select2_1" name="tipo" required>
                                                <option value="radiobutton">risposta singola</option>
                                                <option value="checkbox">risposta multipla</option>
                                            </select>
                                    </div>
                                </div>
                            </div>


                            <div id="repeater">
                                <!-- Repeater Heading -->
                                <div class="form-row">
                                    <div class="col-md-10">
                                        <a class="mt-2 mb-3 btn btn-primary repeater-add-btn" style="color:white;">
                                            AGGIUNGI RISPOSTA
                                        </a>
                                    </div>

                                </div>

                                <div class="clearfix"></div>
                                <!-- Repeater Items -->

                                <div class="items" data-index="0" data-group="opzione">
                                        <!-- Repeater Content -->
                                    <div class="form-row">
                                        <div class="col-md-10 col-sm-8 ">
                                            <div class="position-relative form-group">
                                                <input name="opzione[]" id="" placeholder="" type="text" class="form-control" required data-skip-name="true" ></div>
                                        </div>

                                        <!-- Repeater Remove Btn -->
                                        <div class="col-md-2 col-sm-4 ">
                                            <div class="pull-right repeater-remove-btn">
                                                <button class="mb-2 btn btn-danger remove-btn" disabled="disabled" onclick="$(this).parents('.items').remove()">
                                                    ELIMINA
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="clearfix"></div>
                                    <div></div>
                                </div>
                            </div>


                            {{-- <div class="form-row">
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione1" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione2" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione3" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione4" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione5" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="opzione6" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                            </div> --}}



                            <button type="submit" class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        {{-- CONTROLLA SE ESISTONO DOMANDE --}}
        @if (isset($questions))
        <div class="row">
            <div class="col-md-12 col-lg-12">
            <div id="accordion" class="accordion-wrapper mb-3">
               <?php $i=0; ?>
                @foreach ($survey->questions as $question)
                <?php $i++; ?>
                        <div class="card">
                            <div id="heading{{$i}}" class="card-header">
                                <button type="button" data-toggle="collapse" data-target="#collapse{{$i}}1" aria-expanded="false" aria-controls="collapse{{$i}}" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
                                    <h5 class="m-0 p-0">Domanda {{$i}}</h5>
                                </button>
                            </div>
                            <div data-parent="#accordion" id="collapse{{$i}}1" aria-labelledby="heading{{$i}}" class="collapse" style="">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('questions.update',$question->id) }}" >
                                        @method('PUT')
                                        @csrf
                                        <input name="survey_id" id=""  type="hidden" class="form-control" value=" {{$survey->id}}">
                                        <input name="id" id=""  type="hidden" class="form-control" value=" {{$question->id}}">

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                                    <input name="titolo" id="" placeholder="" type="text" class="form-control" value="{{$question->titolo}}"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="col-md-10">
                                                <div class="position-relative form-group"><label for="" class="">Suggerimento</label>
                                                    <input name="descrizione" id="" placeholder=" " type="text" class="form-control" value="{{$question->descrizione}}"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword"
                                                        class="">Tipo risposta</label>
                                                        <select class="form-control kt-select2 select2" id="kt_select2_1" name="tipo">

                                                            @if ($question->tipo=='checkbox')
                                                            <option value="checkbox">risposta multipla</option>
                                                            <option value="radiobutton">risposta singola</option>
                                                            @else
                                                            <option value="radiobutton">risposta singola</option>
                                                            <option value="checkbox">risposta multipla</option>

                                                            @endif
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title">Risposte</h5>



                                            {{-- <div id="repeater2" >
                                                <!-- Repeater Heading -->
                                                <div class="form-row">
                                                    <div class="col-md-10">
                                                        <a class="mt-2 mb-3 btn btn-primary repeater-add-btn" style="color:white;">
                                                            AGGIUNGI RISPOSTAsss
                                                        </a>
                                                    </div>

                                                </div>

                                                <div class="clearfix"></div>
                                                <!-- Repeater Items -->
                                                @foreach ($question->opzione as $key=>$item)
                                                <div class="items" data-index="{{$key}}" data-group="opzione">
                                                        <!-- Repeater Content -->
                                                    <div class="form-row">
                                                        <div class="col-md-10 col-sm-8 ">
                                                            <div class="position-relative form-group">
                                                                <input name="opzione[{{$key}}]" id="opzione[{{$key}}]" placeholder="" type="text" class="form-control" value="{{$item}}" data-skip-name="true">
                                                            </div>


                                                        </div>

                                                        <!-- Repeater Remove Btn -->
                                                        <div class="col-md-2 col-sm-4 ">
                                                            <div class="pull-right repeater-remove-btn">
                                                                <button class="mb-2 btn btn-danger remove-btn"  onclick="$(this).parents('.items').remove()">
                                                                    ELIMINA
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <div class="clearfix"></div>
                                                    <div></div>
                                                </div>
                                                @endforeach

                                            </div> --}}

                                            <div class="form-row">
                                            @foreach ($question->opzione as $key=>$item)
                                            <div class="col-md-2">
                                                <div class="position-relative form-group">
                                                    <input name="opzione[{{$key}}]" id="opzione[{{$key}}]" placeholder="" type="text" class="form-control" value="{{$item}}"></div>
                                            </div>
                                            @endforeach
                                        </div>



                                        {{-- <div class="form-row">
                                            <div class="col-md-2">
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
                                            </div>
                                        </div> --}}

                                        <button type="submit" class="mt-2 btn btn-primary">Salva</button>
                                    </form>



                                </div>
                            </div>
                        </div>
                        @endforeach
            </div>
            </div>
        </div>
        @endif


       {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection

@push('script')
<script>
    /* Create Repeater */
    $("#repeater").createRepeater({
          showFirstItemToDefault: true,
      });
      $("#repeater2").createRepeater({
          showFirstItemToDefault: true,
      });
</script>
@endpush
