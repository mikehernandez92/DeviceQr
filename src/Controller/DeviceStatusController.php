<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DeviceStatusController extends AbstractController
{
    /**
     * @Route("/deviceStatus", name="device_status")
     */
    public function index()
    {
        return $this->render('device_status/index.html.twig', [
            'controller_name' => 'DeviceStatusController',
        ]);
    }
}
