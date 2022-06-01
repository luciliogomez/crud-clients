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
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->id }}</td>
                            <td>{{$client->nome }}</td>
                            <td>{{$client->email }}</td>
                            <td>
                               
                                <form action="{{route('clients.delete',$client->id)}}" method="post">
                                    <a href="{{route('clients.edit',$client->id)}}" class="btn btn-floating orange">
                                        <i class="fa fa-edit"></i>
                                    </a>    
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-floating red">
                                    <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <!-- <a href="/clients/delete" class="btn btn-floating red">
                                    <i class="fa fa-trash"></i>
                                </a> -->
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
           
        </div>
        
    </div>
    <div class="white paginacao">
                @if(isset($clients))
                    {!! $clients->links()!!}
                @endif
            </div>
    
    
    
</div>
<div class="center">
    {{$status??''}}
</div>

@endsection