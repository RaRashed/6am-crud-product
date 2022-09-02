@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mt-3">

                <h2 class="text-center">CRUD OPERATION FOR PRODUCT</h2>

            </div>

            <div class="pull-right mt-3">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered mt-3">

        <tr>

            <th>No</th>

            <th>Name</th>
            <th>Category</th>

            <th>Details</th>
            <th>Price</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $key => $product)

        <tr>

            <td>{{ $key+1 }}</td>

            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>

            <td>{{ $product->detail }}</td>

            <td>{{ $product->price }}</td>

            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i></a>



                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i></a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    @endsection
