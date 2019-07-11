<?php

	include_once 'EmailGateway.php';
	include_once 'Event.php';

	EmailGateway::send(
		new Event('Someone text')
	);