<?php
/**
 * Includes
 */
require "../furia/includes/bs.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Furia e Fulia</title>
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

        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="span12">
                    <form class="form-horizontal inverse">
                        <legend>Matérias</legend>
                        <div class="btn-toolbar" >
                            <div class="btn-group pull-right">
                                <a class="btn btn-inverse" href="#" id="ctr-percorre-esq"><i class=" icon-chevron-left  icon-white"></i></a>
                                <a class="btn btn-inverse" href="#" id="ctr-percorre-dir"><i class=" icon-chevron-right  icon-white"></i></a>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="id">id</label>
                            <div class="controls">
                                <input type="text" id="id" class="span1 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="url">URL</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">www.devfuria.com.br/</span>
                                    <input id="url" type="text" style="width: 810px"/>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="titulo">Título</label>
                            <div class="controls">
                                <input type="text" id="titulo" class="input-tamanho-padrao"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="resumo">Resumo</label>
                            <div class="controls">
                                <textarea rows="6" id="resumo" class="input-tamanho-padrao"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="keywords">Keywords</label>
                            <div class="controls">
                                <textarea rows="3" id="keywords" class="input-tamanho-padrao"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="keywords">Nível</label>
                            <div class="controls">
                                <select id="nivel">
                                    <option>zero</option>
                                    <option>básico</option>
                                    <option>intermediário</option>
                                    <option>avançado</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="secao">Seção</label>
                            <div class="controls">
                                <select id="secao">
                                    <option>PHP</option>
                                    <option>JS</option>
                                    <option>HTML & CSS</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="secao">Autor</label>
                            <div class="controls">
                                <select id="autor">
                                    <option id="7">Flávio Micheletti</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="dt-cria">Data de criação</label>
                            <div class="controls">
                                <input type="text" id="dt-cria" class="span2 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="dt-atualiza">Data de atualização</label>
                            <div class="controls">
                                <input type="text" id="dt-atualiza" class="span2 centralizar-texto" />
                                <div id="datepicker"></div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="ordem">Ordem</label>
                            <div class="controls">
                                <input type="text" id="ordem" class="span1 centralizar-texto" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-danger disabled">Excluir</button>
                                <button type="submit" class="btn disabled">Cancelar</button>
                                <button type="submit" class="btn btn-info disabled">Salvar</button>

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