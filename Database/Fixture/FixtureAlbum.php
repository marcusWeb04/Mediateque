<?php

namespace App\Database\Fixture;

use App\Model\Album;
use App\Database;

    final readonly class FixtureAlbum{

        public static function insertFixtureAlbum(){

             $eminem = new Album(23,"Shady Record","Slim Shaddy is dead","Eminem", true);
             $dearOcena = new Album(1,"None","Dear April","Frank Ocean", false);
             $azali = new Album(14,"None","Voices From the True World","Azali",true);
             $saster = new Album(1,"None","Fresh(Friday Night Funkin')[Remaster]","Saster",false);
    
             $list = [$eminem,$dearOcena,$azali,$saster];

            try{
                $db = Database::connect();
    
                foreach($list as $data){
                    $query = $db->prepare('INSERT INTO `media`(`titre`, `auteur`, `disponible`, `album`, `book`, `movie`) 
                    VALUES (:titre,:auteur,:disponible,:album,"none","none")');
                    $query->bindParam(":titre",$data['titre']);
                    $query->bindParam(":auteur",$data['auteur']);
                    $query->bindParam(":disponible",$data['disponible']);
                    $query->bindParam(":album",$data['album']);
                }
                
            } catch (\Exception $e) {
                echo 'Erreur : ' . $e->getMessage();
            }
        }
    }