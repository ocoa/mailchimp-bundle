<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Batch;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BatchController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/batch", name="add_batch")
     */
    public function addBatchAction(Request $request)
    {    
        $object = new Batch();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/batch/{id}", name="get_batch")
    */
    public function readBatchAction($id)
    {
        $object = new Batch($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/batch/{id}", name="update_batch")
	*/
    public function updateBatchAction($id)
    {

    }

    /**
    * @Route("/delete/batch/{id}", name="delete_batch")
    */
    public function deleteBatchAction($ticket_id)
    {
        $object = new Batch($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
