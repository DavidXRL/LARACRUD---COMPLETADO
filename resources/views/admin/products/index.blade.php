@extends('layout.main_template')

@section('content')
    <h2>Index Productos</h2>
    <br>
    <button><a href="{{route('products.create')}}">Crear Producto</a></button>
    <button><a href="{{route('brands.create')}}">Registrar Marcas</a></button>
    <br>
    <br>
<table class="table table-striped">
    <thead>
        <th> Nombre del Producto </th>
        <th> Marca </th>
        <th> Description </th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->brand->brand}}</td>
                <td>{{$p->brand->description}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td><img src="/image/products/{{$p->imagen}}" width="60" alt="producto"></td>
                <td>
                    <a class="btn btn-primary" href="{{route("products.show", $p)}}"> 
                        <i class="fa-solid fa-plus"></i> 
                    </a>
                    <button><a href="{{route("products.edit", $p)}}">Editar</a></button>
                    <button><a href="{{route("products.delete", $p)}}">Eliminar</a></button>     
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}} <!-- Genera los enlaces de cada página-->
@endsection
