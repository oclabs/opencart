<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventStatistics extends Controller {
	// model/catalog/review/removeReview/after
	public function removeReview(&$route, &$args, &$output) {
		$this->load->model('setting/statistics');

		$this->model_report_statistics->addValue('review', 1);	
	}
		
	// model/sale/return/removeReturn/after
	public function removeReturn(&$route, &$args, &$output) {
		$this->load->model('setting/statistics');

		$this->model_report_statistics->addValue('return', 1);	
	}	
}