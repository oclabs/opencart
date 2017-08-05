<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventTheme extends Controller {
	public function index(&$route, &$args) {
		// This is only here for compatibility with old templates
		if (substr($route, -3) == 'tpl') {
			$view = substr($route, 0, -3);
		}
		
		if (is_file(DIR_TEMPLATE . $route . '.twig')) {
			$this->config->set('template_engine', 'twig');
		} elseif (is_file(DIR_TEMPLATE . $route . '.tpl')) {
			$this->config->set('template_engine', 'template');
		}		
	}
}
