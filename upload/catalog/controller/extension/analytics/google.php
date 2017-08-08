<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionAnalyticsGoogle extends Controller {
    public function index() {
		return html_entity_decode($this->config->get('analytics_google_code'), ENT_QUOTES, 'UTF-8');
	}
}
