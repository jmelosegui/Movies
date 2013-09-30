<?php

/* This controller renders the genre pages */

class GroupController{
	public function handleRequest(){

		$cat = group::find(array('group'=>$_GET['group'], 'id'=>$_GET['id']));
		
		if(empty($cat)){
			throw new Exception("There is no such genre!");
		}

		// Fetch all the genres:
		$groups = group::find(array('group'=>$_GET['group']));
		
		// Fetch all the movies in this genre:		
		$movies = Movie::find(array('group'=>$_GET['group'], 'id'=>$_GET['id']));

		// $genres and $movies are both arrays with objects
		render('group',array(
			'title'		=> 'Browsing '.$cat[0]->groupName . ' '.$cat[0]->groupCategory,
			'groups'	=> $groups,
			'movies'	=> $movies
		));		
	}
}

?>