<?php

if(session_id() == '') {
    // initiate the session.
    session_start();
}

	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = 'ptbr';
	}else if (isset($_SESSION['lang']) && isset($_GET['lang']) && !empty($_GET['lang'])){
		if($_GET['lang'] == 'ptbr'):
			$_SESSION['lang'] = 'ptbr';
		endif;
		if($_GET['lang'] == 'es'):
			$_SESSION['lang'] = 'es';
		endif;
		if($_GET['lang'] == 'en'):
			$_SESSION['lang'] = 'en';
		endif;
	};
	//print_r($_SESSION['lang']);

	require_once 'languages/'.$_SESSION['lang']. ".php";
	//session_destroy();

?>