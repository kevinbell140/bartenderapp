@extends('main')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('title', '| Menu')


@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>Drink Menu</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ URL::to('users/' . $user . '/orders/create') }}" class="btn btn-block btn-primary btn-h1-spacing">Place an Order</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!--end of row-->
    <div class="row"></div>
        <div class="col-md-8"></div>
            <table class="table">
                <thead>
                    <th>Item</th>
                    <th>Price</th>
                </thead>

                <tbody>
                    @foreach ($menu as $row)
                        <tr>
                            <td> {{$row->title}} </td>
                            <td> {{$row->price}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection