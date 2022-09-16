<?php

/**
 * services - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class ServicesController
{

    /**
     * Carrega a página "/views/pages/services/service-view.php"
     */
    public function index()
    {
        // Título da página
        $this->title = 'Services';

        // Ativa a borda no menu selecionado
        $this->active_service = 'active-menu';
        

        // Parametros da função
        $parametros = (func_num_args() >= 1) ? func_get_arg(0) : array();

        // Essa página não precisa de modelo (model)

        /** Carrega os arquivos do view **/

        // /views/_includes/header.php
        require ABSPATH . '/views/includes/head.php';

        // /views/_includes/menu.php
        require ABSPATH . '/views/includes/menu.php';

        // /views/pages/services-view.php
        require ABSPATH . '/views/pages/services/header.php';

        // /views/pages/services-view.php
        require ABSPATH . '/views/pages/services/services-view.php';

        // /views/_includes/footer.php
        require ABSPATH . '/views/includes/footer.php';
    } // index

} // class ServicesController