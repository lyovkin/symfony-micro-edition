<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\{Method, Route};
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class DefaultApiController
 * @package AppBundle\Controller
 *
 * @Route("/default")
 */
class DefaultApiController extends FOSRestController
{
    /**
     * @Route("/")
     * @Method("GET")
     *
     * @ApiDoc(
     *   resource=true,
     *   section="Default",
     *   description = "Default method",
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @return Response
     */
    public function helloAction(): Response
    {
        return $this->handleView($this->view([], Response::HTTP_OK));
    }
}
