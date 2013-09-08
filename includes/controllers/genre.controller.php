<?php

/* This controller renders the genre pages */

class GenreController{
	public function handleRequest(){

		$cat = genre::find(array('group'=>$_GET['group'], 'id'=>$_GET['id']));
		
		if(empty($cat)){
			throw new Exception("There is no such genre!");
		}

		// Fetch all the genres:
		$genres = genre::find(array('group'=>$_GET['group']));
		
		// Fetch all the movies in this genre:		
		$movies = Movie::find(array('group'=>$_GET['group'], 'id'=>$_GET['id']));

		// $genres and $movies are both arrays with objects
		render('genre',array(
			'title'		=> 'Browsing '.$cat[0]->strGroup . ' '.$cat[0]->jjj,
			'genres'	=> $genres,
			'movies'	=> $movies
		));		
	}
}

?>