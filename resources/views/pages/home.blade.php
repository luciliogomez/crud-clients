@extends('layouts.template',[
    "title" => "Home",
    "top"   => "Home",
    "description" => "Gestão de Clientes"  ,
    "url"         => ''  
])

@section('content')
<div class="row ">

    <div class="cards ">
        <div class="col s12 m3 ">
            <div class="card red white-text" >
                <div class="card-content">
                    <h5>Clientes</h5>
                    <h4>{{$total}}</h4>
                </div>
            </div>
        </div>
        <div class="col s12 m3 ">
            <div class="card purple white-text" >
                <div class="card-content">
                    <h5>Utilizadores</h5>
                    <h4>4</h4>
                </div>
            </div>
        </div>
        <div class="col s12 m3 ">
            <div class="card green white-text" >
                <div class="card-content">
                    <h5>Clientes</h5>
                    <h4>{{$total}}</h4>
                </div>
            </div>
        </div>
        <div class="col s12 m3 ">
            <div class="card blue white-text" >
                <div class="card-content">
                    <h5>Clientes Activos</h5>
                    <h4>{{$total}}</h4>
                </div>
            </div>
        </div>
    
        
    </div>

</div>
@endsection