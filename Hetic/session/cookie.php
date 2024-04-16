<?php
	setcookie('test','toto',30 * 24 * 60 * 60 + time());
	setcookie('','',-1); //supprimer cookie
	var_dump($_COOKIE['cart']);
