@extends('layouts.template',[
    'top'         => "Clientes",
    "description" => "Cadastrar Cliente"
])

@section('title','Cadastrar Cliente')

@section('content')
<div class="row ">
    <form action="{{route('clients.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col s12 m5 input-field">
                <input type="text" name="nome" id="" value="{{old('nome')}}">
                <label for="nome">Nome</label>
            </div>

            <div class="col s12 m5 push-m1 input-field">
                <input type="email" name="email" id="" value="{{old('email')}}">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row center">

            <div class="col s12 input-field ">
                <input type="submit" name="add" id="" value="ADICIONAR" class="btn green">
                <a href="{{route('clients.index')}}" class="btn red">VOLTAR</a>
            </div>
            
            @if(isset($status))
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4 class="green-text">{{$status}}</h4>
                </div>
                <div class="modal-footer">
                <a href="{{route('clients.create')}}" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
                </div>
            @endif
            
        </div>
    </form>
</div>
@endsection