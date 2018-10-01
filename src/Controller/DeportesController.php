<?php
/**
 * Created by PhpStorm.
 * User: fran
 * Date: 1/10/18
 * Time: 12:35
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeportesController
{
    /**
     * @Route("/deportes")
     */

    public function inicio(){
        return new Response('Mi primera pagina de deportes!!!');
    }
    /**
     * @Route("/deportes/primer-articulo")
     */
    public function mostrar(){
        return new Response('Mi primera ruta en Symfony!!!!');
    }

}