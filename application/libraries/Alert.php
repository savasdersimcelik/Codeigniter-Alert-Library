<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Codeigniter Alert Libraryi
* A Simple Flash Messaging Library to easily store flash data in session and view it in your page when loaded.
*
* @package     Codeigniter Flashdata library
* @category    Library
* @author      Savaş Dersim Çelik
* @link        http://savasdersimcelik.com
* @copyright   Copyright (c) 2018 Web Project (http://savasdersimcelik.com)
* @version     v1.0.0
*
*/

class Alert
{
	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

    /**
     * Set Flash Data
     * @param array $array
     * @return redirect
     */
	public function set($array)
	{

		if (!array_key_exists("message",$array)) {
			show_error('Please set a flash message.');
		}

		if (!array_key_exists("type",$array)) {
			show_error('Please set a flash message type.');
		}

		if (!array_key_exists("title",$array)) {
			show_error('Please set a flash message title.');
		}

		if (!array_key_exists("button",$array) OR $array["button"] == true) {
			$button = "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
		}

		$alert = "<div class=\"alert alert-{$array['type']}\">{$button}<strong>{$array['title']}</strong> {$array['message']}</div>";
		$this->CI->session->set_flashdata('message',$alert);
		
		if (array_key_exists("url",$array)) {
			redirect($array["url"]);
		}
		
	}

    /**
     * Set Success Alert Message
     * @param array $array
     */
	public function success($array)
	{
		$array["type"] = "success";
		$this->set($array);
	}

    /**
     * Set Danger Alert Message
     * @param array $array
     */
	public function danger($array)
	{
		$array["type"] = "danger";
		$this->set($array);
	}

    /**
     * Set Warning Alert Message
     * @param array $array
     */
	public function warning($array)
	{
		$array["type"] = "warning";
		$this->set($array);
	}

    /**
     * Set Info Alert Message
     * @param array $array
     */
	public function info($array)
	{
		$array["type"] = "info";
		$this->set($array);
	}

    /**
     * Get Flash Data
     * return flashdata message
     */
	public function get()
	{
		if (!is_null($this->CI->session->flashdata('message'))) {
			return $this->CI->session->flashdata('message');
		}else{
			return "";
		}
	}

}