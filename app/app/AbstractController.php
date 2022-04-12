<?php

namespace M2i\Framework;

class AbstractController
{
    public function render($template, $data=[])
    {
        $loader = new \Twig\Loader\FilesystemLoader('src/Ressources/views');
            $twig = new \Twig\Environment($loader, [
                'cache' => 'var/cache',
                'debug' => true
            ]);
            echo $twig->render($template, $data);
    }
}