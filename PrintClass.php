<?php

	trait PrintClass {
		public function show() {
			echo get_class($this) . "\n";
		}
	}