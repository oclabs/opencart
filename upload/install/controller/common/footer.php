<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');
		
		$data['text_project'] = $this->language->get('text_project');
		$data['text_development'] = $this->language->get('text_development');
		$data['text_documentation'] = $this->language->get('text_documentation');
		$data['text_support'] = $this->language->get('text_support');
		$data['text_footer'] = $this->language->get('text_footer');

		return $this->load->view('common/footer', $data);
	}
}
