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
                                    <a href="{{route('clients.edit',$client->id)}}" class="btn btn-floating orange waves-effect waves-light  ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#modal{{$client->id}}" class="btn btn-floating red waves-effect waves-light modal-trigger">
                                    <i class="fa fa-trash"></i>
                                    </a>  
                                <!-- <a href="/clients/delete" class="btn btn-floating red">
                                    <i class="fa fa-trash"></i>
                                </a> -->
                                <!-- Modal Structure -->
                        <div id="modal{{$client->id}}" class="modal">
                            <div class="modal-content">
                                <h4>Deseja Eliminar {{$client->nome}}:</h4>
                                
                            </div>
                            <div class="modal-footer">
                                <form action="{{route('clients.delete',$client->id)}}" method="post"> 
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn waves-effect waves-light  blue">Sim</button>
                                    <a href="#" class="red modal-close waves-effect waves-light btn">Não</a>                                  
                                </form>
                            </div>
                        </div>
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