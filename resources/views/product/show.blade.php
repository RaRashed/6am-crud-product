@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>



  <div class="col-md-6 mt-3">
    <table class="table table-striped table-dark">
        <thead>
          <tr>

            <th scope="col">Name</th>
            <th scope="col">Detail</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>{{ $product->name }}</td>
            <td>{{  $product->detail }}</td>
            <td>{{  $product->price }}</td>
          </tr>

        </tbody>
      </table>
  </div>

@endsection
