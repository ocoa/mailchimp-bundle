<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Contact;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/contact", name="add_contact")
     */
    public function addContactAction(Request $request)
    {    
        $object = new Contact();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/contact/{id}", name="get_contact")
    */
    public function readContactAction($id)
    {
        $object = new Contact($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/contact/{id}", name="update_contact")
	*/
    public function updateContactAction($id)
    {

    }

    /**
    * @Route("/delete/contact/{id}", name="delete_contact")
    */
    public function deleteContactAction($ticket_id)
    {
        $object = new Contact($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
