<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 13:09:30
         compiled from "paginas\clientes\cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346652a9bde1399b73-78255409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6440b9a12d4a127a243c085a64f5b3f9299d5c' => 
    array (
      0 => 'paginas\\clientes\\cadastro.tpl',
      1 => 1386940168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1346652a9bde1399b73-78255409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a9bde1428c32_06333505',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9bde1428c32_06333505')) {function content_52a9bde1428c32_06333505($_smarty_tpl) {?><div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Cadastro de Clientes</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Nome completo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-4 control-label"><small>Data de Nascimento</small></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nome" placeholder="Data de nascimento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">C.P.F.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Cadastro de Pessoa Física">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">R.G.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Identidade">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome" class="col-sm-4 control-label">Sexo</label>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Masculino
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Endereço</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">Rua</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Rua">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">Número</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Número">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">Bairro</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Bairro">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">C.E.P.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Código de endereço postal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">Cidade</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Cidade">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-4 control-label">Estado</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nome" placeholder="Estado">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <input type="reset" class="btn btn-warning" value="Limpar"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Listar Clientes</div>
        <div class="panel-body">
            <input class="form-control input-lg" type="text" placeholder="Digite o nome do Cliente">
        </div>
    </div>
</div>
<?php }} ?>
