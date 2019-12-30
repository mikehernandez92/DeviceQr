<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RegisterDeviceController extends AbstractController
{
    /**
     * @Route("/registerDevices", name="register_devices",  methods={"POST"})
     */
    public function RegisterDevice(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        return $this->json(['status' => '200',
                            'data'=> $data]);
    }

    /**
     * @Route("/returnDevices", name="return_devices",  methods={"POST"})
     */
    public function ReturnDevices(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        return $this->json(['status' => '200',
                            'data'=> $data]);
    }
}
