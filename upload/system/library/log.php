<?php
// *	@developer	http://oclabs.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Log class
*/
class Log {
	private $handle;
	
	/**
	 * Constructor
	 *
	 * @param	string	$filename
 	*/
	public function __construct($filename) {
		$this->handle = fopen(DIR_LOGS . $filename, 'a');
	}
	
	/**
     * 
     *
     * @param	string	$message
     */
	public function write($message) {
		fwrite($this->handle, date('Y-m-d G:i:s') . ' - ' . print_r($message, true) . "\n");
	}
	
	/**
     * 
     *
     */
	public function __destruct() {
		fclose($this->handle);
	}
}