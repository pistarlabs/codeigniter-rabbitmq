<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sender extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('queue');

	}

	public function index()
	{
		$result = $this->queue->push('hello', array('Hello', 'World'), 'testing.push');
    var_dump($result);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
