<?php

/*
  This is the index file of our simple website.
  It routes requets to the appropriate controllers
*/
require_once "includes/main.php";

try {

  if($_GET['id']){
    $c = new GroupController();
  }
  else if(empty($_GET) || $_GET['group']){
    $c = new HomeController();
  }
  else throw new Exception('Wrong page!');
  
  $c->handleRequest();

}
catch(Exception $e) {
  // Display the error page using the "render()" helper function:
  render('error',array('message'=>$e->getMessage()));    
}

?>