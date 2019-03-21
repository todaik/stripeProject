<?php
/**
 * Created by PhpStorm.
 * User: wbarl
 * Date: 21/03/2019
 * Time: 17:37
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController
{
    /**
     * @Route("/yo/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }
}