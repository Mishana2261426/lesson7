<?php

	class Mailer {
		public static $mail_from = 'mail@mail.com';

		public static function send($mail, $subject, $text) {
			echo $mail . "\n";
			echo $subject . "\n";
			echo $text . "\n";
			echo self::$mail_from . "\n";
		}
	}