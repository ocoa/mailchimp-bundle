<?php

namespace MailChimpBundle\Controller;

use MailChimpBundle\Entity\CampaignDefaults;

use MailChimpBundle\Utils\ControllerAbstract;
use MailChimpBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CampaignDefaultsController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/campaign_defaults", name="add_campaign_defaults")
     */
    public function addCampaignDefaultsAction(Request $request)
    {    
        $object = new CampaignDefaults();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/campaign_defaults/{id}", name="get_campaign_defaults")
    */
    public function readCampaignDefaultsAction($id)
    {
        $object = new CampaignDefaults($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/campaign_defaults/{id}", name="update_campaign_defaults")
	*/
    public function updateCampaignDefaultsAction($id)
    {

    }

    /**
    * @Route("/delete/campaign_defaults/{id}", name="delete_campaign_defaults")
    */
    public function deleteCampaignDefaultsAction($ticket_id)
    {
        $object = new CampaignDefaults($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
