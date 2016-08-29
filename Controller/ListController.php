<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\List;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/list", name="add_list")
     */
    public function addListAction(Request $request)
    {    
        $object = new List();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/list/{id}", name="get_list")
    */
    public function readListAction($id)
    {
        $object = new List($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/list/{id}", name="update_list")
	*/
    public function updateListAction($id)
    {

    }

    /**
    * @Route("/delete/list/{id}", name="delete_list")
    */
    public function deleteListAction($ticket_id)
    {
        $object = new List($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
