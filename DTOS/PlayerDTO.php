<?php

namespace DTOS;

use Classes\Team;

class PlayerDTO
{




    static function getPlayersByTeamName($team_name){
        $req = "SELECT * FROM 'player' WHERE 'team_id' EQUALS (SELECT 'team_id' FROM 'team' WHERE 'team_name' EQUALS "+$team_name+" LIMIT 1)LIMIT 1";


    }

    static function getPlayerByName($name){
        $req = "SELECT * FROM 'player' WHERE 'username' EQUALS "+$name;



    }

    static function createPlayer(Team $player){
        $name = $player[name];
        $req = "INSERT INTO 'player' ('username') VALUES ("+$name+")";


    }

    static function updatePlayer($player){
        $req = "UPDATE "

    }

    static function deletePlayer($name)
    {
        $req = "DELETE FROM 'player' WHERE 'username' EQUALS "+$name;
    }
}