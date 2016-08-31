<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Template;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TemplateController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/template", name="add_template")
     */
    public function addTemplateAction(Request $request)
    {    
        $object = new Template();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/template/{id}", name="get_template")
    */
    public function readTemplateAction($id)
    {
        $object = new Template($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/template/{id}", name="update_template")
	*/
    public function updateTemplateAction($id)
    {

    }

    /**
    * @Route("/delete/template/{id}", name="delete_template")
    */
    public function deleteTemplateAction($ticket_id)
    {
        $object = new Template($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
