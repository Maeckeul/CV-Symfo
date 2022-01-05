<?php 

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


class Identity
{
    private $id;
    private $name; 
    private $statut; 
    private $address; 
    private $phone; 
    private $mail; 
    private $websiteProfile; 
    private $linkedinProfile; 
    private $githubProfile; 
}