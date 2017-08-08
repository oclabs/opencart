<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventDebug extends Controller {
	public function before(&$route, &$args) {
		if ($route == 'common/home') { // add the route you want to test
			$this->session->data['debug'][$route] = microtime();		
		}
	}
	
	public function after($route, &$args, &$output) {
		if ($route == 'common/home') { // add the route you want to test
			if (isset($this->session->data['debug'][$route])) {
				$log_data = array(
					'route' => $route,
					'time'  => microtime() - $this->session->data['debug'][$route]
				);
				
				$this->log->write($log_data);
			}
		}
	}	
}
