<?php

namespace App\Controller;

class login extends \App\Page {

	public function action_index() {
		$this->login_check('login');
	}

}
