<?php
/**
 * Created by PhpStorm.
 * User: denys.d
 * Date: 20.09.2018
 * Time: 17:43
 */

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response("Ololoolo");
    }
}