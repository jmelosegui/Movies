<?php

class Movie
{

    public static function find($arr)
    {
        global $db;

        switch ($arr['group']) {
            case 'genre':
                $sql = "SELECT m.* FROM genrelinkmovie glm inner join moviepropertiesview m on glm.idMovie = m.idMovie Where idGenre = :id order by m.year desc";
                break;
            case 'director':
                $sql = "SELECT m.* FROM directorlinkmovie alm inner join moviepropertiesview m on alm.idMovie = m.idMovie Where idDirector = :id order by m.year desc";
                break;
            case 'year':
                $sql = "SELECT * FROM moviepropertiesview Where year = :id order by m.year desc";
                break;
            case 'set':
                $sql = "SELECT m.* FROM moviepropertiesview m Where m.idSet = :id order by m.year desc";
                break;
            case 'all':
                $sql = "SELECT m.* FROM moviepropertiesview m order by m.idMovie desc";
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