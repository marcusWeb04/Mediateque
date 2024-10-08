<?php

namespace App\Database\Fixture;

use App\Entity\Book;
use App\Database;

    final readonly class FixtureBook{

        public static function insertFixtureBook(){

            private $across = new Book(140,"animation","Spiderman across the spiderverse",true);
            private $parrain = new Book(195,"Crime/Policier","Le parain","Francis Ford Coppola","Joaquim Dos Santos",true);
    
            private $list = [$across,$parrain];

            try{
                $db = Database::connect();
    
                foreach($list as $data){
                    $query = $db->prepare('INSERT INTO `media`(`titre`, `auteur`, `disponible`, `album`, `book`, `movie`) 
                    VALUES (:titre,:auteur,:disponible,"none",":book","none")');
                    $query->bindParam(":titre",$data['titre']);
                    $query->bindParam(":auteur",$data['auteur']);
                    $query->bindParam(":disponible",$data['disponible']);
                    $query->bindParam(":book",$data['album']);
                }
                
            } catch (\Exception $e) {
                echo 'Erreur : ' . $e->getMessage();
            }
        }
    }