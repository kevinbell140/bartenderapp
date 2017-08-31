@extends('main')

@section('title', '| Place Order')

@section('content')
    <div class="row">
        <div  class="col-md-8 col-md-offset-2">
            <h1>Place Order</h1>
            <hr>
            {!! Form::open(['route' => ['users.orders.store', $user->id], 'method' => 'POST']) !!}
            @foreach($menus as $menu)
                {{Form::label($menu->name, $menu->title . "  -  " . $menu->price)}}
                {{Form::number($menu->name, null, array('class' => 'form-control'))}}


            @endforeach
            {{Form::submit('Place Order', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
            {!! Form::close() !!}
        </div>

    </div>

@endsection