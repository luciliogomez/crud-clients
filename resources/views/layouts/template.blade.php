
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/assets/materialize/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/dashboard.css') }}">
    <title>@yield("title")</title>
</head>
<body>
    <div class="all row">
        <!-- MENU DE NAVEGACAO LATERAL -->
        
            <div class="navigation col s2 ">
    <div class="logo center white-text">
        <span class="light"><i class="fa fa-pencil fa-1x"></i>CRUD</span>
    </div>
    <div class="list-group white-text">
        <a href="{{route('home')}}" class="list-group-item white-text"><i class="fa fa-home fa-fw" aria-hidden="true"></i>
            Home
        </a>
        
        <a href="{{route('clients.create')}}" class="list-group-item white-text"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>
            Novo Cliente
        </a>

        <a href="{{route('clients.index')}}" class="list-group-item white-text"><i class="fa fa-list fa-fw" aria-hidden="true"></i>
            Lista de Clientes
        </a>
        <!-- <a href="/perfil" class="list-group-item white-text"><i class="fa fa-user fa-fw" aria-hidden="true"></i>
            Meu Perfil
        </a> -->
        
        <a  class="list-group-item white-text"  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <!-- {{ __('Logout') }}> -->
                    <i class="fa fa-power-off fa-fw" aria-hidden="true"></i>
            Sair
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
        </form>
    </div>
</div>
        
        
        <!-- CONTEUDO PRINCIPAL -->
        <div class="content col s10 push-s2">
            <!-- Pequeno conteudo no topo -->
            <div class="top-content white">
                <span class="blue-text"><i class="fa fa-home"></i> Crud / {{$top}}</span>
            </div>

            <div class="main-content white">
                <!-- Tema descritivo da Pagina -->
                <div class="content-description z-depth-1">
                    <h4>{{ $description }}</h4>
                </div>

                <!-- Corpo do conteudo principal -->
                <div class="content-body">

                    <!-- Put your content here -->
                    @yield("content")      

                    @if($errors->any())
                    <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4>Ocorreu um Erro:</h4>
                                @foreach($errors->all() as $error)
                                        <p class="red-text">{{$error}}</p>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="modal-close waves-effect waves-green btn-flat">OK</a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/css/assets/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/css/assets/materialize/js/materialize.js') }}"></script>

   
    <script>
        $('select').material_select();
        
        var erro = document.getElementsByClassName('erro')[0];
        setTimeout(() => {
            erro.innerHTML = ''
        }, 5000);
        
        $(document).ready(function(){
                $('.modal').modal();
            });
        
    </script>
    
     @if($errors->any())
        <script>
            $(document).ready(function(){
                $('#modal1').modal('open');
            });
        </script>
    @elseif(isset($status))
            <script>
                $(document).ready(function(){
                    $('#modal1').modal('open');
                });
            </script>
    @endif
</body>
</html>