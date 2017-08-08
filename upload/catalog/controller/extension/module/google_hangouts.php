<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleGoogleHangouts extends Controller {
	public function index() {
		$this->load->language('extension/module/google_hangouts');

		if ($this->request->server['HTTPS']) {
			$data['code'] = str_replace('http', 'https', html_entity_decode($this->config->get('module_google_hangouts_code')));
		} else {
			$data['code'] = html_entity_decode($this->config->get('module_google_hangouts_code'));
		}

		return $this->load->view('extension/module/google_hangouts', $data);
	}
}