<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventTheme extends Controller {
	public function index(&$view, &$data) {
		if (is_file(DIR_TEMPLATE . $view . '.tpl')) {
			$this->config->set('template_engine', 'php');
		} elseif (is_file(DIR_TEMPLATE . $view . '.twig')) {
			$this->config->set('template_engine', 'twig');
		}		
	}
}
