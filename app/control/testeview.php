<?php

class testeview extends TPage
{
    function __construct()
    {
        parent::__construct();

        echo 'construtor <br>';
    }
    public function onEvento($param)
    {
        echo 'evento <br>';
        var_dump($param);
    }

    public static function onEventoEstatico()
    {
        echo 'Evento estatico <br>';
    }

    public function show()
    {
        parent::show();
        echo 'show <br>';
    }

}

