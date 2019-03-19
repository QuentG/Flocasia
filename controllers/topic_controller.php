<?php

if(!isset($_GET['title']) || !isset($_GET['id']) || empty($_GET['title']) || empty($_GET['id']))
{
	die("Title or id are missing / not good");

} else {

	$get_title = str_secur($_GET['title']) ?? false;
	$get_id = str_secur($_GET['id']) ?? false;

	$title = Topic::getTitle($get_id);

	// Recup current sujet
	$current_title = $title['sujet'];

	$topic = Topic::getTopic($get_id);

}