<?php

if(isset($_GET['title'], $_GET['id']) AND !empty($_GET['title']) AND !empty($_GET['id']))
{
	$get_title = str_secur($_GET['title']) ?? false;
	$get_id = str_secur($_GET['id']) ?? false;

	$title = Topic::getTitle($get_id);

	$current_title = $title['sujet'];

	if($get_title !== Topics::urlEncode($current_title))
	{
		die('Title invalid');
	}

	$topic = Topic::getTopic($get_id);

} else {
	die("Error");
}