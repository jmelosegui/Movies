<?php

class Movie{

	public static function find($arr){
		global $db;

		switch ($arr['group']) {
			case 'genre':
				$sql = "SELECT m.* FROM genrelinkmovie glm inner join movie m on glm.idMovie = m.idMovie Where idGenre = :id order by m.c07 desc";
				break;			
			case 'director':
				$sql = "SELECT m.* FROM directorlinkmovie alm inner join movie m on alm.idMovie = m.idMovie Where idDirector = :id order by m.c07 desc";
				break;
			case 'year':
				$sql = "SELECT * FROM movie Where c07 = :id order by c07 desc";
				break;
            case 'set':
                $sql = "SELECT m.* FROM movie m Where m.idSet = :id order by m.c07 desc";
                break;
			default:
				throw new Exception("Unsupported group! Movies");				
		}

		$st = $db->prepare($sql);
		$st->execute(array('id' => $arr['id']));
		
		return $st->fetchAll(PDO::FETCH_CLASS, "Movie");
	}
}

?>