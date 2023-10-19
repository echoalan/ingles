<?php


    include('MODEL/config.php');

    class Word {

        private $conn;

        public function __construct() {
            $this->conn = Config::connection();
        }

        public function getWords() {
            $query = "SELECT words.WORD, words.TRANSLATION, classification.NAME 
                    FROM words
                    INNER JOIN classification ON words.CLASSIFICATION = classification.ID_CLASSIFICATION";

            $result = mysqli_query($this->conn, $query);

            if ($result) {
                $words = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $words[] = $row;
                }
                return $words;
            } else {
                // Manejo de errores
                return false;
            }
        }
    }





?>