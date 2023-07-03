<?php

class HomeController
{
    public function index()
    {
        try {
            $colectPostagens = Postagem::selecionaTodos();

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html'); 

            $parametros = array();
            $parametros['nome'] = 'Rodrigo';

            $conteudo = $template->render($parametros);
            echo $conteudo;

           

        } catch (Exception $e) {
            echo $e-> getMessage();
        }
    }
}