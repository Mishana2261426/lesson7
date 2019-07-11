<?php

	include 'Mailer.php';

	Mailer::$mail_from = 'mail2@mail.com';

	Mailer::send('a@mail.com', 'asd' , 'Hello');

