<?php

require_once 'App/Core/core.php';

require_once 'lib/Database/Connection.php';

require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/ErroController.php';

require_once 'App/Model/Postagem.php';

require_once 'vendor/autoload.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new Core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}',$saida, $template);

echo $tplPronto;