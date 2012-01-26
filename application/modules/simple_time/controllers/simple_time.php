<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Simple_time contoller
 * @author Philsquare LLC (philsquare.com)
 */

class Simple_time extends App_controller
{
	public function __construct()
	{
		// Call the App_controller constructor
		parent::__construct();
		$this->config->load('simple_time');
		$this->config->load('37signals_users');
		$this->load->library('arrays');
	}
	
	public function index()
	{
		$data['from'] = $this->input->post('from_month') ? 
			array(
				$this->input->post('from_month'),
				$this->input->post('from_day'),
				$this->input->post('from_year')
			) :
			array(
				date('n'),
				date('j'),
				date('Y')
			);

		$data['to'] = $this->input->post('to_month') ? 
			array(
				$this->input->post('to_month'),
				$this->input->post('to_day'),
				$this->input->post('to_year')
			) :
			array(
				date('n'),
				date('j'),
				date('Y')
			);
		
		$this->user_data = $this->config->item('37signals_users');
		$users = array_keys($this->user_data);
		$first_user = reset($users);
		$data['users_radios'] = array_combine($users, $users);
		
		$data['selected_user'] = $this->input->post('selected_user') ? $this->input->post('selected_user') : $first_user;
		
		if ($this->input->post('selected_user'))
		{
			$this->_embed_report($data);
		}
		
		$this->template->build('report', $data);
	}
	
	private function _embed_report(&$data)
	{
		$url = $this->config->item('37signals_url');
		
		$from = mktime(0, 0, 0, $data['from'][0], $data['from'][1], $data['from'][2]);
		$to   = mktime(0, 0, 0, $data['to'][0], $data['to'][1], $data['to'][2]);
		
		foreach ($this->config->item('37signals_dates') as $date => $details)
			foreach ($details as $attribute => $format)
				$url .= '&'.$attribute.'='.date($format, $$date);
		
		foreach ($this->user_data[$data['selected_user']] as $attribute => $value)
			$url .= '&'.$attribute.'='.$value;
		
		$data['reports'][] = $url;
	}
}
