<?php

/* This controller renders the home page */

class HomeController{
	public function handleRequest(){
		
		// Select all the categories:
		$content = group::find(array('group' => $_GET['group']));
		
		render('home',array(
			'title'		=> 'Welcome to XBMC Media Library',
			'content'	=> $content
		));
	}
}

?>