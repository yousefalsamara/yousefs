@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ url('yousefproject') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Titel</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control @error('titlre') is-invalid @enderror" name="titlre" >
                                    @error('titlre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control @error('des') is-invalid @enderror " name="des" >
                                    @error('des')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

{{--    <form method="post" action="{{ url('yousefproject') }}">--}}
{{--        @csrf--}}
{{--        <dev  class="card-body">--}}
{{--        <label  class="test1">title</label>--}}
{{--        <input class="test2" name="titlre">--}}

{{--        <label class="test1" >description</label>--}}
{{--        <input class="test2" name="des">--}}
{{--        <button class="test3" type="submit">Go</button>--}}
{{--    </dev>--}}

{{--    </form>--}}


