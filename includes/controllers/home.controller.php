<?php

/* This controller renders the home page */

class HomeController{
	public function handleRequest(){
		
		// Select all the categories:
		$content = Genre::find(array('group' => $_GET['group']));
		
		render('home',array(
			'title'		=> 'Welcome to XBMC Media Library',
			'content'	=> $content
		));
	}
}

?>