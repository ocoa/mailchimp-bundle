<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Folder;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FolderController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/folder", name="add_folder")
     */
    public function addFolderAction(Request $request)
    {    
        $object = new Folder();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/folder/{id}", name="get_folder")
    */
    public function readFolderAction($id)
    {
        $object = new Folder($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/folder/{id}", name="update_folder")
	*/
    public function updateFolderAction($id)
    {

    }

    /**
    * @Route("/delete/folder/{id}", name="delete_folder")
    */
    public function deleteFolderAction($ticket_id)
    {
        $object = new Folder($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
