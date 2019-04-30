<?php

class homeController extends controller {

    public function index(){
        $anuncios = new Anuncios();

        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => 'Leandro',
            'idades'=> 26
        );
        
        $this->loadTemplate('home', $dados);
    }
}