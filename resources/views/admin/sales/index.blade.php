@extends('layout.main_template')

@section('content')
<br>
<center>
    <h2>Index Address</h2>
</center>
    <br>
    <center>
    <a class="btn btn-secondary" href="{{route('sales.create')}}">Crear venta</a>
</center>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped table-bordered mx-auto">
            <thead class="text-center">
                <tr>
                    <th> ID Venta </th>
                    <th> ID Cliente </th>
                    <th> ID Producto </th>
                    <th> Fecha de venta </th>
                    <th> Acciones </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $s)
                    <tr>
                        <td class="text-center">{{$s->id}}</td>
                        <td class="text-center">{{$s->client->id}}</td>
                        <td class="text-center">{{$s->product->id}}</td>
                        <td class="text-center">{{$s->sale_date}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('sales.show', $s)}}"> 
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('sales.edit', $s)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('sales.delete', $s)}}">
                                <i class="fa-regular fa-trash-can"></i>                    
                            </a>   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
@endsection


