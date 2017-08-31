@extends('main')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('title', '| Homepage')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1> Welcome to the Bartender App</h1>
                <p class="lead"> Please Select an Option</p>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <a href="{{ route('menu.index') }}" class="btn btn-block btn-primary btn-h1-spacing">View the menu</a>
    </div>

@endsection


