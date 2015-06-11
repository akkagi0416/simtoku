<?php

class Mvno
{
    private $db;

    function __construct()
    {
        $dbname = 'sqlite:/var/www/sim/wp-content/themes/sim/data/mvno.db';

        try{
            $this->db = new PDO( $dbname );
            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch( PDOException $e ){
            die( 'DB connect error' . $e->getMessage() );
        }
    }

    function __destruct()
    {
        $this->db = null;
    }

    function getInfo( $shortname )
    {
        $sql = 'SELECT * FROM mvno_list where shortname = :shortname';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( ':shortname', $shortname, PDO::PARAM_STR );

        try{
            $stmt->execute();
            $results = $stmt->fetchAll( PDO::FETCH_ASSOC );
        }catch( PDOException $e ){
            die( 'getInfo error' . $e->getMessage() );
        }

        return $results;
    }
}
