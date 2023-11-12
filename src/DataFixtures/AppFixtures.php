<?php

namespace App\DataFixtures;


use App\Entity\Card;
use Symfony\Component\Asset\Package;
use Symfony\Component\Finder\Finder;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Serializer\SerializerInterface;

class AppFixtures extends Fixture
{    
    public function load(ObjectManager $manager): void
    {
        $json = file_get_contents("assets\data.json");
        $json_cards = json_decode($json, true);

        foreach ($json_cards as $json_card) {
            $card = new Card;
            $card->setName($json_card["name"]);
            $card->setNumber($json_card["number"]);
            $card->setImageUrl($json_card["imageUrl"]);
            $card->setAlternate($json_card["alternate"]);
            $card->setPower($json_card["power"]);
            $card->setEffect($json_card["effect"]);
            $card->setCounter($json_card["counter"]);
            $card->setCardTrigger($json_card["trigger"]);
            $card->setCardSet($json_card["set"]);
            $card->setColor($json_card["color"]);
            $card->setRarity($json_card["rarity"]);
            $card->setType($json_card["type"]);
            $card->setAttribute($json_card["attribute"]);
            $card->setCost($json_card["cost"]);
            
            $manager->persist($card);
        }

        $manager->flush();
    }
}
