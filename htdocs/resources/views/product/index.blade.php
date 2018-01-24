@extends('layouts.app')

@section('content')
    <a  href="{{ route('product.create') }}" class="btn btn-primary" role="button">Crear nuevo</a>
    <br>
    <div class="col-md-12">
        <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td> #{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                    <a  href="{{ route('product.edit',$product->slug)  }}" class="btn btn-danger" role="button">edit</a>            
                    <a  href="#" class="btn btn-danger" role="button">x</a>            

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!!  $products->render() !!}
    </div>


@endsection
