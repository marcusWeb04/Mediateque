<?php
    namespace App\Entity;

    class Album extends Media{
        private int $songNumber;
        private string $editor;

        public function __construct($songNumber,$editor,$titre,$auteur,$disponible)
        {
            parent::__contruct($titre,$auteur,$disponible);
            $this->songNumber = $songNumber;
            $this->editor = $editor;
        }

        public function getSongNumber(){
            return $this->songNumber;
        }

        public function setSongNumber(int $songNumber){
            $this->songNumber = $songNumber;
        }

        public function getEditor(){
            return $this->editor;
        }

        public function setEditor(string $editor){
            $this->editor = $editor;
        }
    }