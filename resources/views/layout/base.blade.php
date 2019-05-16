<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Gerenciador de tarefas</title>
    <!-- Bootstrap tabelas -->
    <link href="{{asset('css/app.css')}}" rel = "stylesheet">
    <link href="{{asset('css/style.css')}}" rel = "stylesheet">
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
    <meta name="csrf-token" content = "{{csrf_token()}}">
    <style>
    .titulo{
            text-shadow: #350105 0px 0px 3px;
            font-size: 40pt;
            color: #A70C19;
    }
    a{
        color: ;
    }
    .listar{
        position: absolute;
        left: 38%;
        top: 17%;
    }
    </style>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body class="left-menu">  
    <div class="menu-wrapper">
        <div class="mobile-menu">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">           
                    </div><!--/.nav-collapse --> 
                </div><!--/.container-fluid -->
            </nav>
        </div><!-- end mobile-menu -->

        <header class="vertical-header">
            <div class="vertical-header-wrapper">
                <nav class="nav-menu">
                    <div class="logo">
                        <a href="index.html"><img src="" alt=""></a>
                    </div><!-- end logo -->
                    <div class="margin-block"></div>
                    <ul class="primary-menu">
                        <li class="child-menu"><a href="#">Tipo tarefa<i></i></a>
                            <div class="sub-menu-wrapper">
                                <ul class="sub-menu center-content">
                                    <li><a href="#">Registrar um tipo de tarefa</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="child-menu"><a href="#">Tarefa</i></a>
                            <div class="sub-menu-wrapper">
                                <ul class="sub-menu center-content">  
                                    <li><a href="#">Adicionar uma tarefa</a></li>
                                    <li><a href="{{route('tarefa.index')}}">Listar todas as tarefas</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="child-menu"><a href="#">Dados de sua conta</a>
                            <div class="sub-menu-wrapper">
                                <ul class="sub-menu center-content">
                                    <li><a href="#">Atualziar Conta</a> 
                                    </li>
                                    <li><a href="#">Excluir</a> 
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="child-menu"><a href="#">Sair</i></a>
                        </li>
          </ul>
    </div><!-- end wrapper -->
</body>
</html>