<?php
	include("controle-acesso.php"); 
	fazLogout();
	header("Location: index.php?logout=true");
	die();