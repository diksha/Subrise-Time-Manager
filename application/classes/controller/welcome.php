<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Loader {
	
	public function action_index()
	{
		$this->template->page_title = 'Time Management';
		$this->template->page_view  = View::factory('pages/welcome');
	}

} // End Controller_Welcome