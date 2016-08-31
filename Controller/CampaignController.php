<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Campaign;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CampaignController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/campaign", name="add_campaign")
     */
    public function addCampaignAction(Request $request)
    {    
        $object = new Campaign();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/campaign/{id}", name="get_campaign")
    */
    public function readCampaignAction($id)
    {
        $object = new Campaign($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/campaign/{id}", name="update_campaign")
	*/
    public function updateCampaignAction($id)
    {

    }

    /**
    * @Route("/delete/campaign/{id}", name="delete_campaign")
    */
    public function deleteCampaignAction($ticket_id)
    {
        $object = new Campaign($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
