<?php 

namespace App\Controllers;  

class IndexController {
    public function index() {
        echo 'Chegamos até o IndexController e disparamos a action index';
    }

    public function sobreNos() {
        echo 'Chegamos até aqui no IndexController e disparamos a action sobre Nós';
    }
}

?>