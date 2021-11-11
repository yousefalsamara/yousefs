

{{--<form method="post" action="{{url('ss/'.$post->id)}}">--}}
{{--    {{ method_field('PUT') }}--}}
{{--@csrf--}}
{{--    <label>title</label>--}}
{{--    <input name="titlre" value="{{$post->titlre}}">--}}
{{--    <button type="submit">save</button>--}}

{{--</form>--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{url('ss/'.$post->id)}}"> {{method_field('put')}}
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input  class="form-control @error('titlre') is-invalid @enderror " name="titlre" value="{{$post->titlre}}" >
                                    @error('titlre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       save
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
