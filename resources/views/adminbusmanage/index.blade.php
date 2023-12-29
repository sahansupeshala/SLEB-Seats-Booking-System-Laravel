@extends('layouts.AdminNav')
 
@section('content')
<div class="container">
<div class="row">
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table light col-6 ">
        <tr>
            <th>No</th>
            <th>User_Id</th>
            <th>Owner Name</th>
            <th>Bus No</th>
            <th>Route Permite No </th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->user_id }}</td>
            <td>{{ $product->Owner_name }}</td>
            <td>{{ $product->bus_no }}</td>
            <td>{{ $product->Route_permite_no }}</td>
            <td>
                        @if($product->Status)
							<p>approved</p>
						@else
							<p>Not approved</p>
						@endif
            </td>
            <td>
                <form action="{{ route('adminbusmanage.destroy',$product->id) }}" method="POST">
               
                <a class="btn btn-info" href="{{ route('adminbusmanage.show',$product->id) }}">Approved</a>
    
                    <a class="btn btn-primary" href="{{ route('adminbusmanage.edit',$product->id) }}">Edit</a>
   
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