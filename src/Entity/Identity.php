<?php 

namespace App\Entity;

class Identity
{
    public function getIdentity() {
        return [
            'name' => 'Maëckeul Chenais',
            'statut' => 'Développeur Web',
            'address' => 'Tahiti',
            'phone' => '89 61 21 76',
            'mail' => 'contact@web-iti.com',
            'websiteProfile' => 'https://web-iti.com/',
            'linkedinProfile' => 'https://www.linkedin.com/in/maeckeulchenais/', 
            'githubProfile' => 'https://github.com/Maeckeul?tab=repositories',
        ];
    }
}