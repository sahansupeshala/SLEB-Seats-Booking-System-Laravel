@extends('layouts.AdminNav')

@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right pt-5">
                <a class="btn btn-success pb-2" href="{{ route('adminroute.create') }}"> Create New Route</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table ">
        <tr>
            <th>No</th>
            <th>Route no</th>
            <th>Departure City</th>
            <th>Arrival City</th>
            <th>Ticket Price (Rs.) </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->Route_no }}</td>
            <td>{{ $product->depature_city }}</td>
            <td>{{ $product->arrival_city }}</td>
            <td>{{ $product->ticket_price }}.00</td>
            <td>
                <form action="{{ route('adminroute.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('adminroute.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('adminroute.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

</div>

@endsection
