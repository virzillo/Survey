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
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow xdropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            CREA NUOVO
                        </button>

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Orders</div>
                            <div class="widget-subheading">Last year expenses</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>1896</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
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
            </div>
        </div> --}}

        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Crea Survey</h5>
                    <form method="POST" action="{{ route('survey.store') }}">

                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="" class="">Titolo</label>
                                    <input name="titolo" id="titolo" placeholder="inserisci titolo survey" type="text" class="form-control  @error('titolo') is-invalid @enderror" value="{{ old('titolo') }}" required></div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="" class="">Descrizione</label>
                                    <input name="descrizione" id="descrizione" placeholder=" " type="text" class="form-control  @error('descrizione') is-invalid @enderror" value="{{ old('descrizione') }}" required></div>
                            </div>
                            <div class="col-md-2">
                            <div class="position-relative form-group"><label for="" class="">Limite</label>
                                <input name="limite" id="limite" placeholder="numero max" type="number" class="form-control @error('limite') is-invalid @enderror" value="{{ old('limite') }}" required></div>
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

                        <button type="submit" class="mt-2 btn btn-primary">Crea</button>
                    </form>
                </div>
            </div>
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Elenco Survey</h5>
                        <table class="mb-0 table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Descrizione</th>
                                <th>Limite</th>
                                <th>Azioni</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($surveys as $survey)
                                <tr>
                                    <th scope="row">{{$survey->id}}</th>
                                    <td>{{$survey->titolo}}</td>
                                    <td>{{$survey->descrizione}}</td>
                                    <td>{{$survey->limite}}</td>

                                    <td >
                                        <form action="{{route('survey.delete', $survey->id)}}" method="POST" id="form-delete">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('questions.show', $survey->id )}}"
                                                class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                                title="modifica domande">modifica domande
                                                <span class="svg-icon svg-icon-md">
                                                    <i class="fa fa-cog icon-gradient bg-mean-fruit"> </i>
                                                </span>
                                            </a>
                                            <button type="submit"
                                                class="btn btn-icon btn-light btn-hover-danger btn-sm "
                                                id="confirm-delete" onclick="ConfirmDelete()">
                                                <span class="svg-icon svg-icon-md">
                                                    <i class="fa fa-archive icon-gradient bg-sunny-morning"> </i>
                                                </span>
                                            </button>

                                        </form>
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

@push('script')
{{-- <script>


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
                // confirm(result.value);
                $("#form-delete").submit();
            }
        });
    });

</script> --}}
@endpush
