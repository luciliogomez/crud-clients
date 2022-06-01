@extends('layouts.template',[
    'top'         => "Clientes",
    "description" => "Editar Cliente - {$client->nome}"
])

@section('title',$client->nome)

@section('content')
<div class="row ">
    <form action="{{route('clients.update',$client->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col s12 m5 input-field">
                <input type="text" name="nome" id="" value="{{$client->nome}}">
                <label for="nome">Nome</label>
            </div>

            <div class="col s12 m5 push-m1 input-field">
                <input type="email" name="email" id="" value="{{$client->email}}">
                <label for="nome">Email</label>
            </div>
        </div>
        <div class="row center">

            <div class="col s12 input-field ">
                <input type="submit" name="add" id="" value="Guardar" class="btn green">
                <a href="{{route('home')}}" class="btn red">VOLTAR</a>
            </div>

            @if(isset($status))
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4 class="green-text">{{$status}}</h4>
                </div>
                <div class="modal-footer">
                <a href="{{route('clients.create')}}" class="modal-close waves-effect waves-green btn-flat">OK</a>
                </div>
                </div>
            @endif
        </div>
    </form>
</div>
@endsection