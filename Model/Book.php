<?php
    namespace App\Model;
    
    class Media extends Media{
        private int $pageNumber;

        public function __construct($pageNumber,$titre,$auteur,$disponible)
        {
            $this->pageNumber = $pageNumber;
            parent::__contruct($titre,$auteur,$disponible);
        }

        public function getPageNumber(){
            return $this->pageNumber;
        }

        public function setPageNumber(int $pageNumber){
            $this->pageNumber = $pageNumber;
        }
    }