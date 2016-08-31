<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\File;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FileController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/file", name="add_file")
     */
    public function addFileAction(Request $request)
    {    
        $object = new File();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/file/{id}", name="get_file")
    */
    public function readFileAction($id)
    {
        $object = new File($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/file/{id}", name="update_file")
	*/
    public function updateFileAction($id)
    {

    }

    /**
    * @Route("/delete/file/{id}", name="delete_file")
    */
    public function deleteFileAction($ticket_id)
    {
        $object = new File($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
