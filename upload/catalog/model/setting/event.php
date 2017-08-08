<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelSettingEvent extends Model {
	function getEvents() {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` WHERE `trigger` LIKE 'catalog/%' AND status = '1' ORDER BY `sort_order` ASC");

		return $query->rows;
	}
}