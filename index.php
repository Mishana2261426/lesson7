<?php 

	include 'User.php';

	class Student extends User {

		public function setEmail($email) {
			$this->email = $email . ' ';
		}
	}