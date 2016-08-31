<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Template-folder;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Template-folderController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/template_folder", name="add_template_folder")
     */
    public function addTemplate-folderAction(Request $request)
    {    
        $object = new Template-folder();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/template_folder/{id}", name="get_template_folder")
    */
    public function readTemplate-folderAction($id)
    {
        $object = new Template-folder($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/template_folder/{id}", name="update_template_folder")
	*/
    public function updateTemplate-folderAction($id)
    {

    }

    /**
    * @Route("/delete/template_folder/{id}", name="delete_template_folder")
    */
    public function deleteTemplate-folderAction($ticket_id)
    {
        $object = new Template-folder($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
