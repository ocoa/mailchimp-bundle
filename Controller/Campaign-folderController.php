<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\Campaign-folder;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Campaign-folderController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/campaign_folder", name="add_campaign_folder")
     */
    public function addCampaign-folderAction(Request $request)
    {    
        $object = new Campaign-folder();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/campaign_folder/{id}", name="get_campaign_folder")
    */
    public function readCampaign-folderAction($id)
    {
        $object = new Campaign-folder($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/campaign_folder/{id}", name="update_campaign_folder")
	*/
    public function updateCampaign-folderAction($id)
    {

    }

    /**
    * @Route("/delete/campaign_folder/{id}", name="delete_campaign_folder")
    */
    public function deleteCampaign-folderAction($ticket_id)
    {
        $object = new Campaign-folder($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
