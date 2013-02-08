<?php
/**
 * Includes
 */
require "../furia/includes/bs.php";

/**
 * Autenticação
 */
$_GET['c'] = (isset($_GET['c'])) ? $_GET['c'] : null ;
if($_GET['c'] != CHAVE) die('sorry man!');
$_SESSION['chave'] = CHAVE;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Furia e Fulia</title>
        <meta charset="utf-8" />
        <link href="<?php echo BASE_PATH; ?>furia/boot/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo BASE_PATH; ?>furia/boot/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <link href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .input-tamanho-padrao {
                width:97%;
            }
            .centralizar-texto {
                text-align: center;
            }
            label {
                background-color: #EEEEEE;
                border-radius: 5px 5px 5px 5px;
                line-height: 30px;
            }
            .form-horizontal .control-label {
                padding-top: 0px;
                text-align: center;
                font-weight: 900;
            }
            .btn-fulia {
                width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <form class="form-horizontal inverse">
                        <legend>Matérias
                            <span>
                                <a link="" class="btn btn-link pull-right disabled" id="ctr-acao-novo">Nova matéria</a>
                            </span>
                        </legend>
                        <div class="btn-toolbar" >
                            <div class="btn-group pull-right">
                                <a class="btn btn-inverse" href="#" id="ctr-percorre-esq"><i class=" icon-chevron-left  icon-white"></i></a>
                                <a class="btn btn-inverse" href="#" id="ctr-percorre-dir"><i class=" icon-chevron-right  icon-white"></i></a>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-id">id</label>
                            <div class="controls">
                                <input type="text" id="frm-id" class="span1 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-url">URL</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">www.devfuria.com.br/</span>
                                    <input type="text" id="frm-url" style="width: 810px"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-titulo">Título</label>
                            <div class="controls">
                                <input id="frm-titulo" type="text" class="input-tamanho-padrao"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-resumo">Resumo</label>
                            <div class="controls">
                                <textarea rows="6" id="frm-resumo" class="input-tamanho-padrao"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-keywords">Keywords</label>
                            <div class="controls">
                                <textarea rows="3" id="frm-keywords" class="input-tamanho-padrao"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-nivel">Nível</label>
                            <div class="controls">
                                <select id="frm-nivel">
                                    <option value=""></option>
                                    <option value="zero">Zero</option>
                                    <option value="basico">Básico</option>
                                    <option value="intermediario">Intermediário</option>
                                    <option value="avancado">Avançado</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-secao">Seção</label>
                            <div class="controls">
                                <select id="frm-secao" >
                                    <option value=""></option>
                                    <option value="php">PHP</option>
                                    <option value="js">JS</option>
                                    <option value="html-css">HTML & CSS</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-autor">Autor</label>
                            <div class="controls">
                                <select id="frm-autor">
                                    <option value=""></option>
                                    <option value="Flávio Micheletti">Flávio Micheletti</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-dt-criacao">Data de criação</label>
                            <div class="controls">
                                <input type="text" id="frm-dt-criacao" class="span2 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-dt-atualizacao">Data de atualização</label>
                            <div class="controls">
                                <input type="text" id="frm-dt-atualizacao" class="span2 centralizar-texto" />
                                <div id="datepicker"></div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="frm-ordem">Ordem</label>
                            <div class="controls">
                                <input type="text" id="frm-ordem" class="span1 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="button" id="ctr-acao-excluir" class="btn-fulia btn btn-danger disabled">Excluir</button>
                                <button type="button" id="ctr-acao-cancelar" class="btn-fulia btn disabled">Cancelar</button>
                                <button type="button" id="ctr-acao-salvar" class="btn-fulia btn btn-info disabled">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="http://code.jquery.com/jquery-1.9.0.js" type="text/javascript"></script>
    <script src="<?php echo BASE_PATH; ?>furia/boot/js/bootstrap.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
</html>