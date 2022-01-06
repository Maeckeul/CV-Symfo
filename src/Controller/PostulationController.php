<?php 

namespace App\Controller; 

use App\Entity\Identity;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostulationController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $identityModel = new Identity(); 
        $identity = $identityModel->getIdentity(); 

        return $this->render('homepage.html.twig', ["identity" => $identity]);
    }
}
