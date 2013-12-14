<?php
include_once 'classes/Smarty.class.php';

$smarty = new Smarty();

// Configurações do Smarty
$smarty->template_dir = 'paginas/';
$smarty->config_dir   = 'paginas/';
$smarty->compile_dir  = 'paginas/cache/';
$smarty->cache_dir    = 'paginas/cache/';

// Constantes da página
$smarty->assign('title', '.: Ordem de Serviços :.');
$smarty->assign('base', '//127.0.0.1/ordemdeservico/OrdemDeServico');

if (!empty($_GET['rota']) && substr($_GET['rota'], -1) == '/')
{
    $_GET['rota'] = substr($_GET['rota'], 0, -1);
}

if (!empty($_GET['rota']) && $_GET['rota'] == 'login')
{
  $smarty->display('login.tpl');
}
else
{
  // Verifica se a rota não está vazia
  if (!empty($_GET['rota']))
  {
    // pega a rota e coloca a extensão do ".tpl"
    $page = "paginas/{$_GET['rota']}.tpl";

    // verifica se o arquivo existe
    if (file_exists($page))
    {
      ob_start();
      $smarty->display($page);
      $cache = ob_get_contents();
      ob_end_clean();

      $smarty->assign('content', $cache);
    }
    else
    {
      ob_start();
      $smarty->display('erro404.tpl');
      $cache = ob_get_contents();
      ob_end_clean();

      $smarty->assign('content', $cache);
    }
  }
  else
  {
      ob_start();
      $smarty->display('home.tpl');
      $cache = ob_get_contents();
      ob_end_clean();

      $smarty->assign('content', $cache);
  }
  
  $smarty->display('index.tpl');
}