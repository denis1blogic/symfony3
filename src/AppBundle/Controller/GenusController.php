<?php
/**
 * Created by PhpStorm.
 * User: denys.d
 * Date: 20.09.2018
 * Time: 17:43
 */

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\Routing\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
            'ololol olooll oo ll o o ll o ol l',
            'bl a lvbfld dfhj jd djcdc',
            'Ololo!'
        ];


        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'notes' => $notes
        ]);
    }
}