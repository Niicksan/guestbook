<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(string $name = ''): Response
    {
        $great = '';

        if ($name) {
            $great = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }

        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController', 'great' => $great
        ]);
    }
}