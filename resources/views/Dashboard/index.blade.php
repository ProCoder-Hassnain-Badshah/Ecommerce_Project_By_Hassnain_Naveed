@extends('Dashboard.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                    <a href="{{URL::to('/admin/products/create')}}" class="btn btn-dark" style="margin-left:700px">Create</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Sku</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->Name }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->description}}</td>
                                <td>{{ $product->image}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
