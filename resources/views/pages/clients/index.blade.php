@extends('layouts.template',[
    'top'         => "Clientes",
    "description" => "Lista de Clientes"
])

@section('title','Lista de Clientes')

@section('content')

<div class="row " >
    <div class="tabela">
        <div class="col s12 ">
            <table class="table responsive-table bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>

                <tbody>
                    @if(isset($clients))
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id }}</td>
                            <td>{{$cliente->nome }}</td>
                            <td>{{$cliente->email }}</td>
                            <td>
                                <a href="/clients/edit" class="btn btn-floating orange">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="/clients/delete" class="btn btn-floating red">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
    
    
</div>
<div class="center">
    {{$status??''}}
</div>

@endsection