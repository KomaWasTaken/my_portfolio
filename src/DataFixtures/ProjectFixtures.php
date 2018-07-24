<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Project;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /* for($i = 1; $i <= 5; $i++){
            $project = new Project();
            $project->setId($i)
                    ->setPorTitle('YoUpload')
                    ->setPorShortDesc()
                    ->setPorLink()
                    ->setPorLongDesc()
                    ->setPorMainTechno();
            $manager->persist($project); 
        }*/
        // $product = new Product();
        // $manager->persist($product);

        /* $manager->flush(); */
    }
}

