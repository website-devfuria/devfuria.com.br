<?php

namespace oop;

use oop\Cookies;
use models\Alunos;

#
#
#
class Autenticador {

    # Teste de login, perceba que é para usar com o Slim no final de cada rota:
    #
    #   $this->get('/', function ($request, $response, $args) {
    #
    #   })->add(new oop\Autenticador());
    #
    # Obs: o __invoke permite evocar o objeto como se fosse uma função:
    #
    #   $auth = new Autenticador();
    #   $auth();
    #
    public function __invoke($request, $response, $next) {
        if($this->esta_logado()) {
            //echo "ok, está logado!"; die();
            return $next($request, $response);
        } else {
            //echo "neg, NÂO está logado!"; die();
            $home = $GLOBALS['sdd']->url->abs;
            return $response->write("Sem permissão!!! <a href='$home'>Logue-se aqui!</a>");
            //return $response->withRedirect($home, 403);
        }
    }

    #
    #
    #
    static function get_aluno_by_hash($hash) {
        require $GLOBALS['site']->path->api . '/boot.php';
        return Alunos::fabric_by_hash($hash);
    }

    #
    # Teste de login
    #
    function esta_logado() {
        $logado = isset($_SESSION['usuario']['id']);
        return ($logado) ? true : false;
    }


    #
    # É este cara quem libera o uso do sistema ( vide `esta_logado()` )
    #
    function definir_credenciais($usuario_bean) {
        $_SESSION['usuario']['id'] = $usuario_bean->id;

        // $_SESSION['dev']['usuario']['id'] = $usuario_bean->id;
    }

    #
    # Cria a sessão básica (não é uma credencial)
    #
    function definir_sessao($area_bean) {

        # porque não carregar completamente a área na memória ?
        $_SESSION['area'] = $area_bean->export();

        # ao acessar uma área, adicionamos também a área na session dev
        $_SESSION['dev']['area'] = $area_bean->export();

        # copia o id da área selecionada
        $_SESSION['dev']['areas'] = [$area_bean->id];
    }

    #
    # Efetua logout (limpa a sessão)
    #
    function logout() {
        $this->limpar_session();
    }

    #
    # Limpando as sessions
    #
    function limpar_session() {
        $_SESSION = [];
    }



}
