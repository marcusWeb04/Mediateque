<?php

namespace App\Database\Fixture;

use App\Model\Book;
use App\Database;

    final readonly class FixtureBook{

        public static function insertFixtureBook(){

             $bible = new Book(8048,"La Bible","Collaboration", true);
             $OnePiece = new Book(21450,"One Piece","Eichiro Oda", true);
             $FGFF = new Book(304,"Frigiel et Fluffy, le retour de l'Ender dragon","Frigiel",False);
    
             $list = [$bible,$OnePiece,$FGFF];

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