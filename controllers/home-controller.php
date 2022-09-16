<?php

/**
 * home - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class HomeController
{

	/**
	 * Carrega a página "/views/home/home-view.php"
	 */
	public function index()
	{
		// Título da página
		$this->title = 'Home';

		// Ativa a borda no menu selecionado
        $this->active_home = 'active-menu';

		// Parametros da função
		$parametros = (func_num_args() >= 1) ? func_get_arg(0) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
		require ABSPATH . '/views/includes/head.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/includes/menu.php';

		// /views/pages/home/headers-view.php
		require ABSPATH . '/views/pages/home/header.php';

		// /views/home/home-view.php
		require ABSPATH . '/views/pages/home/home-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/includes/footer.php';
	} // index

} // class HomeController