<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components = array('Auth');

	function login() {
	}
						function logout() {
									$this->redirect($this->Auth->logout());
										}

		}
?>