@extends('layouts.master')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        {{-- <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div> {{$page_title}} {{$survey->titolo}}
                        <div class="page-title-subheading">{{$survey->descrizione}}</div>
                    </div>
                </div>

            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>

                        </div>
                    </div>
                    @isset ($questions)
                    @foreach ($questions as $question)
                    <div class="card-body"><h5 class="card-title">Domanda {{$question->id}}</h5>
                        <form method="POST" action="">

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


                            <div class="form-row">
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
                            </div>

                            {{-- <div class="position-relative form-group"><label for="exampleAddress" class="">Limite</label>
                                <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                </div>
                            </div> --}}

                            <button type="submit" class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                    @endforeach

                    @endisset
                    <div class="card-body"><h5 class="card-title">Domanda 1</h5>
                        <form method="POST" action="{{ route('questions.store') }}">

                            @csrf
                            <input name="survey_id" id=""  type="hidden" class="form-control" value=" {{$survey->id}}">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descrizione" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword"
                                            class="">Tipo risposta</label>
                                            <select class="form-control kt-select2 select2" id="kt_select2_1" name="tipo">

                                                <option value="checkbox">risposta multipla</option>
                                                <option value="radiobutton">risposta singola</option>


                                            </select>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">Risposte</h5>


                            <div class="form-row">
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
                            </div>

                            {{-- <div class="position-relative form-group"><label for="exampleAddress" class="">Limite</label>
                                <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                </div>
                            </div> --}}

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
