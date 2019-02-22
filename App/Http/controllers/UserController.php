<?php

namespace Controllers;

use App\User;

/* user controller */
class UserController {

	public function test() {
		echo 'test 101';
	}
	public function index() {
		$users = (new User)->all();
		return $users;
	}

	public function show($id) {
		$user = (new User)->find($id);

		if (is_null($user)) {
			throw new Exception("User not found!", 1);
		}

		return $user;
	}
}