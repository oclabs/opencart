<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelDesignTranslation extends Model {
	public function getTranslations($route) {
		$language_code = !empty($this->session->data['language']) ? $this->session->data['language'] : $this->config->get('config_language');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "translation WHERE store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "' AND (route = '" . $this->db->escape($route) . "' OR route = '" . $this->db->escape($language_code) . "')");

		return $query->rows;
	}
}
