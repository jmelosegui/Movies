<?php

/* This controller renders the home page */

class HomeController
{
    public function handleRequest()
    {

        $content = null;
        $movies = null;
        $page = 'home';

        if ($_GET['group'] != 'all') {
            // Select all the categories:
            $content = group::find(array('group' => $_GET['group']));
        } else {
            $movies = Movie::find(array('group' => $_GET['group']));
            $page = 'group';
        }

        render($page, array(
            'title' => 'Welcome to XBMC Media Library',
            'content' => $content,
            'movies' => $movies
        ));


    }
}

?>