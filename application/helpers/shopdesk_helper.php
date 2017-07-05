<?php

function pwd($s) {
	return sha1($s.'ff4a930256fc215f4a7ab126df868494');
}

function authenticate() {
	if(isset($_SESSION['shopdesk']) && $_SESSION['shopdesk']['logged_in'] == true) {
		return $_SESSION['shopdesk'];
	}
	else {
		return false;
	}
} 