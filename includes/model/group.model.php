<?php

class group{

	public static function find($arr = array()){
		global $db;				
		
		if(empty($arr) || !$arr['group']){
			$arr['group'] = 'genre';
		}
		
		$group = $arr['group'];

		switch ($group) {
			case 'genre':
				if($arr['id']) {
					$sql = "SELECT g.idGenre as groupId, g.strGenre as groupName, count(glm.idGenre) as moviesCount, '$group' as groupCategory FROM genre g left join genrelinkmovie glm on g.idGenre = glm.idGenre WHERE g.idGenre=:id group by g.idGenre, g.strGenre order by g.strGenre";
				}
				else {
					$sql = "SELECT g.idGenre as groupId, g.strGenre as groupName, count(glm.idGenre) as moviesCount, '$group' as groupCategory FROM genre g left join genrelinkmovie glm on g.idGenre = glm.idGenre group by g.idGenre, g.strGenre order by g.strGenre";
				}
				break;
			case 'director':
				if($arr['id']) {
					$sql = "SELECT a.idActor as groupId, a.strActor as groupName, count(alm.idDirector) as moviesCount, '$group' as groupCategory FROM actors a left join directorlinkmovie alm on a.idActor = alm.idDirector WHERE a.idActor=:id group by a.idActor, a.strActor having count(alm.idDirector) > 0 order by a.strActor";
				}
				else {
					$sql = "SELECT a.idActor as groupId, a.strActor as groupName, count(alm.idDirector) as moviesCount, '$group' as groupCategory FROM actors a left join directorlinkmovie alm on a.idActor = alm.idDirector group by a.idActor, a.strActor having count(alm.idDirector) > 0 order by a.strActor";
				}
				break;
			case 'year':
				if($arr['id']) {
					$sql = "SELECT c07 as groupId, c07 as groupName, count(c07) as moviesCount, '$group' as groupCategory from movie WHERE c07=:id group by c07 order by c07 desc";
				}
				else {
					$sql = "SELECT c07 as groupId, c07 as groupName, count(c07) as moviesCount, '$group' as groupCategory from movie group by c07 order by c07 desc";
				}
				break;
			default:
				throw new Exception("Unsupported property!");
		}
		
		$st = $db->prepare($sql);
		$st->execute(array('id' => $arr['id']));
		
		// Returns an array of Groups objects:
		return $st->fetchAll(PDO::FETCH_CLASS, "Group");
	}
}

?>