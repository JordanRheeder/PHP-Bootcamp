<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK") {
		if (!file_exists('../private/')) {
			mkdir('../private/');
		}
		if (!file_exists('../private/')) {
			mkdir('../private/');
		}
		$account = unserialize(file_get_contents('../private/passwd'));
		$exist = false;
		foreach ($account as $key => $user) {
			if ($user['login'] === $_POST['login']) {
				$exist = true;
			}
		}
		if ($exist) {
			echo "ERROR\n";
		} else {
			$account[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
			file_put_contents('../private/passwd', serialize($account));
			echo "OK\n";
		}
	} else {
		echo "ERROR\n";
	}
?>