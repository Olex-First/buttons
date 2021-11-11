@extends('layout.app')

@section('title')Contact us
@endsection

@section('content')
    <div class="container mt5">

        <div class="row">
            <div class="col-3"><h1 class="mt-3">Create new item</h1>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>

                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('create-form') }}" method="post">

                    @csrf


                    <div class="form-group mt-3">
                        <label for="name"> <strong>Beverage</strong> </label>
                        <input type="text" name="name" placeholder="Your Beverage" id="name" class="form-control">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success">Make</button>
                </form>
            </div>

            <div class="col-9"></div>

        </div>
    </div>

@endsection
