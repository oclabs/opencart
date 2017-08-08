<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventTranslation extends Controller {
	public function index(&$route, &$key) {
		$this->load->model('design/translation');
		
		$results = $this->model_design_translation->getTranslations($route);
		
		foreach ($results as $result) {
			if (!$key) {
				$this->language->set($result['key'], $result['value']);
			} else {
				$this->language->get($key)->set($result['key'], $result['value']);
			}
		}	
	}
}
