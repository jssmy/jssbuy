@extends('layouts.app')

@section('content')
    <a  href="{{ route('category.create') }}" class="btn btn-primary" role="button">Crear nuevo</a>
    <br>
    <div class="col-md-12">
        <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td> #{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                    <a  href="{{ route('category.edit',$category->slug) }}" class="btn btn-danger" role="button">edit</a>            
                    <a  href="#" class="btn btn-danger" role="button">x</a>            

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>


@endsection
