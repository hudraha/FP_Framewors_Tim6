<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class routesbackend extends CI_Controller {
	public function index()
	{
		redirect(base_url('backend'));
	}
}
