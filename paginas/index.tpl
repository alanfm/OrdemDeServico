<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="{$base}" />
        <title>{$title}</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Wrap all page content here -->
        <div id="wrap">
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./"><abbr title="Sistema de Ordem de Serviços">SOS</abbr> - Painel Administrativo</a><br>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><small>Ordem de Serviços</small> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nova</a></li>
                                    <li><a href="#">Buscar</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Pendentes</a></li>
                                    <li><a href="#">Por funcionário</a></li>
                                    <li><a href="#">Por cliente</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="clientes/cadastro">Novo</a></li>
                                    <li><a href="clientes/buscar">Buscar</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Ativos</a></li>
                                    <li><a href="#">Ultimas OS</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Funcionários <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Novo</a></li>
                                    <li><a href="#">Buscar</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Ultimas OS</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Novo</a></li>
                                    <li><a href="#">Buscar</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Estoque</a></li>
                                    <li><a href="#">Avaria</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serviços <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Novo</a></li>
                                    <li><a href="#">Buscar</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Ultimos cadastrados</a></li>
                                    <li><a href="#">Avaria</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Novo Usuário</a></li>
                                    <li><a href="#">Buscar Usuário</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Relatórios</li>
                                    <li><a href="#">Logs</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login">Sair</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                <div  class="row">
                    {$content}
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Copyright &copy; 2013 | <a href="#" target="_blank">Astherisco Informática</a></p>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
