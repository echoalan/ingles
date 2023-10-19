<?php

include('MODEL/words_model.php');

class WordController {
    private $wordModel;

    public function __construct() {
        $this->wordModel = new Word();
    }

    public function index() {
        $words = $this->wordModel->getWords();
        include('VIEW/words_view.php');
    }
}

$controller = new WordController();
$controller->index();

    

    



