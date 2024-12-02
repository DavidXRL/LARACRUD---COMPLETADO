@extends('layout.main_template')

@section('content')
<br>
<center>
    <h2>Index de clientes</h2>
</center>
    <br>
    <center>
    <a class="btn btn-secondary" href="{{route('clients.create')}}">Agregar cliente</a>

</center>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped table-bordered mx-auto">
            <thead class="text-center">
                <tr>
                    <th> ID </th>
                    <th> Nombre del cliente </th>
                    <th> Apellido paterno </th>
                    <th> Apellido materno </th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $c)
                    <tr>
                        <td class="text-center">{{$c->id}}</td>
                        <td class="text-center">{{$c->name}}</td>
                        <td class="text-center">{{$c->last_name}}</td>
                        <td class="text-center">{{$c->second_last_name}}</td>
                        <td class="text-center">{{$c->email}}</td>
                        <td class="text-center">{{$c->phone}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('clients.show', $c)}}"> 
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('clients.edit', $c)}}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('clients.delete', $c)}}">
                                <i class="fa-regular fa-trash-can"></i>                    
                            </a>   
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
