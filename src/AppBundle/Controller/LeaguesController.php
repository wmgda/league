<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;

class LeaguesController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource=true
     * )
     */
    public function getLeaguesAction() : Response
    {
        $data = [];
        $view = $this->view($data, 200);

        return $this->handleView($view);
    }
}
