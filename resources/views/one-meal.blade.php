@extends('layout.app')
@section('title'){{$data->name}} @endsection


@section('content')


        <div class="alert alert-info mt-3 ">
            <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mt-4 ">
                <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ $data->name }}</a>
            </div>
{{--            <a href="#" class="btn btn-warning">Edit</a>--}}
            <a href="{{ route('contact-delete', $data->id) }}" class="btn btn-danger">Delete</a>

  {{--            <a href="{{ route('contact-data-one', $el->id) }}" class="btn btn-warning">Detail</a>--}}

        </div>




@endsection
