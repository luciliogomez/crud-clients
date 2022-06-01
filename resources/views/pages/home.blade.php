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
                    <h4>43</h4>
                </div>
            </div>
        </div>
    
        <div class="col s12 m3 ">
            <div class="card blue white-text" >
                <div class="card-content">
                    <h5>Clientes</h5>
                    <h4>43</h4>
                </div>
            </div>
        </div>
    
        <div class="col s12 m3 ">
            <div class="card green white-text" >
                <div class="card-content">
                    <h5>Clientes</h5>
                    <h4>43</h4>
                </div>
            </div>
        </div>

        <div class="col s12 m3 ">
            <div class="card grey white-text" >
                <div class="card-content">
                    <h5>Clientes</h5>
                    <h4>43</h4>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection