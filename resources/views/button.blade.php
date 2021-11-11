@extends('layout.app')
@section('title')Button
@endsection


@section('header')

    <header class="p-1 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <svg class="bi me-2" width="40" height="32" role="mg" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('creat-button') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Primary button</a></li>
{{--                    <li><a href="/" class="nav-link px-2 text-white">Update</a></li>--}}
{{--                    <li><a href="/" class="nav-link px-2 text-white">Contact</a></li>--}}
{{--                    <li><a href="/" class="nav-link px-2 text-white">Messages</a></li>--}}
{{--                    <button type="submit" class="btn btn-success">Send</button>--}}
                </ul>


            </div>
        </div>
    </header>
    @include('include.message')
    @foreach($data as $el)
        <div class="container ">
            <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mt-4 ">
                <a href="{{route('one-meal', $el->id)  }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ $el->name }}</a>
        </div>




{{--            <a href="{{ route('contact-data-one', $el->id) }}" class="btn btn-warning">Detail</a>--}}

        </div>

    @endforeach
@endsection

