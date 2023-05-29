<?php
class TemplateViewBasico extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {
            $html = new \Adianti\Widget\Template\THtmlRenderer('app/resources/template-basico.html');

            $customer = new stdClass();

            $customer->id = 5;
            $customer->name = 'peter';
            $customer->address = 'Street 1';

            $replaces = [];
            $replaces['id'] = $customer->id;
            $replaces['name'] = $customer->name;
            //$replaces['address'] = $customer->address;

            $replaces['customer'] = $customer;

            $html->enableSection('main',$replaces);

            parent::add($html);
        }
        catch (Exception $e)
        {
            new \Adianti\Widget\Dialog\TMessage('error',$e->getMessage());
        }

    }
}
