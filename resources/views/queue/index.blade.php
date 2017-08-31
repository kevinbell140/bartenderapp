@extends('main')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('title', '| Order Queue')


@section('content')

    <div class="row"></div>
    <div class="col-md-8"></div>
    <table class="table">
        <thead>
        <th>Order Number</th>
        <th>Beer</th>
        <th>Red Wine</th>
        <th>White Wine</th>
        <th>Whiskey</th>
        <th>Vodka</th>
        <th>Rum</th>
        </thead>

        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td> {{$order->id}} </td>
                <td> {{$order->beer}} </td>
                <td> {{$order->red_wine  }}</td>
                <td> {{$order->white_wine}}</td>
                <td> {{$order->whiskey}}</td>
                <td> {{$order->vodka}}</td>
                <td> {{$order->rum }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::open(['route' => ['users.orders.destroy', $order->user_id, $order->id], 'method' => 'DELETE', ]) }}
                            {{ Form::submit('Delete')}}
                            {{ Form::close() }}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>


@endsection