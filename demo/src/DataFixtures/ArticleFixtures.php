<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=10; $i++){
            $article=new Article();
            $article->setTitle("titre de l article numero $i")
                    ->setContent("<p>contenu de l article numero $i</p>")
                    ->setImage("http://placehold.it/350x150")
                    ->setCretedAt(new \Datetime());
            $manager->persist($article);

        }

        $manager->flush();
    }
}
