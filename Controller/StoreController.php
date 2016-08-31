<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Store;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StoreController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/store", name="add_store")
     */
    public function addStoreAction(Request $request)
    {    
        $object = new Store();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/store/{id}", name="get_store")
    */
    public function readStoreAction($id)
    {
        $object = new Store($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/store/{id}", name="update_store")
	*/
    public function updateStoreAction($id)
    {

    }

    /**
    * @Route("/delete/store/{id}", name="delete_store")
    */
    public function deleteStoreAction($ticket_id)
    {
        $object = new Store($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
