<?php /* Smarty version Smarty-3.1.15, created on 2013-12-14 13:32:43
         compiled from "paginas\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:849752a9bcf0e01ca3-00865215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39008bae5b29ee6c67cf3c95c9d8995535120d83' => 
    array (
      0 => 'paginas\\login.tpl',
      1 => 1387027916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849752a9bcf0e01ca3-00865215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a9bcf12a4d34_65184505',
  'variables' => 
  array (
    'base' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9bcf12a4d34_65184505')) {function content_52a9bcf12a4d34_65184505($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <style>
            .form-signin {
              max-width: 330px;
              padding: 15px;
              margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
              margin-bottom: 10px;
            }
            .form-signin .checkbox {
              font-weight: normal;
            }
            .form-signin .form-control {
              position: relative;
              font-size: 16px;
              height: auto;
              padding: 10px;
              -webkit-box-sizing: border-box;
                 -moz-box-sizing: border-box;
                      box-sizing: border-box;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="text"] {
              margin-bottom: -1px;
              border-bottom-left-radius: 0;
              border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
        </style>

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
                        <a class="navbar-brand" href="#">Sistema de Ordem de Serviços</a><br>
                    </div>
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                <form class="form-signin" role="form" action="./" method="post">
                    <h2 class="form-signin-heading">Efetue o login</h2>
                    <input type="text" class="form-control" placeholder="Usuário" required autofocus>
                    <input type="password" class="form-control" placeholder="Senha" required>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
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
<?php }} ?>
