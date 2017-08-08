<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelSettingApi extends Model {
	public function login($username, $key) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "api a LEFT JOIN " . DB_PREFIX . "api_ip `ai` ON (a.api_id = ai.api_id) WHERE a.username = '" . $this->db->escape($username) . "' AND a.key = '" . $this->db->escape($key) . "'");

		return $query->row;
	}
}