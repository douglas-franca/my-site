<?php

/**
 * Contacts - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class ContactsController
{

    /**
     * Carrega a página "/views/pages/Contacts/service-view.php"
     */
    public function index()
    {
        // Título da página
        $this->title = 'Contacts';

        // Ativa a borda no menu selecionado
        $this->active_contacts = 'active-menu';

        // Parametros da função
        $parametros = (func_num_args() >= 1) ? func_get_arg(0) : array();

        // Essa página não precisa de modelo (model)

        /** Carrega os arquivos do view **/

        // /views/_includes/header.php
        require ABSPATH . '/views/includes/head.php';

        // /views/_includes/menu.php
        require ABSPATH . '/views/includes/menu.php';

        // /views/pages/Contacts-view.php
        require ABSPATH . '/views/pages/contacts/contacts-view.php';

        // /views/_includes/footer.php
        require ABSPATH . '/views/includes/footer.php';
    } // index

} // class ContactsController