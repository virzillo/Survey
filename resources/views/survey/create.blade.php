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
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>

                        </div>
                    </div>
                    <div class="card-body"><h5 class="card-title">Domanda 1</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>

                    <div class="card-body"><h5 class="card-title">Domanda 2</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>

                    <div class="card-body"><h5 class="card-title">Domanda 3</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>

                    <div class="card-body"><h5 class="card-title">Domanda 4</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                    <div class="card-body"><h5 class="card-title">Domanda 5</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                    <div class="card-body"><h5 class="card-title">Domanda 6</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                    <div class="card-body"><h5 class="card-title">Domanda 7</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                    <div class="card-body"><h5 class="card-title">Domanda 8</h5>
                        <form class="">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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
                                        <input name="titolo" id="" placeholder="" type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <input name="descr" id="" placeholder=" " type="text" class="form-control"></div>
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

                            <button class="mt-2 btn btn-primary">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       {{-- @include('layouts.footer') --}}
    </div>
</div>


@endsection
