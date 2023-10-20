<?php

namespace App\Controller;

use App\Entity\Card;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CardController extends AbstractController
{
    /**
     * @Route("/api/cards", name="get_cards", methods={"GET"})
     */
    public function getAllCards(CardRepository $cardRepository, SerializerInterface $serializer): JsonResponse
    {
        $cardList = $cardRepository->findAll();
        
        $jsonCardList = $serializer->serialize($cardList, 'json');
        return new JsonResponse($jsonCardList, Response::HTTP_OK, [], true);
    }

    /**
     * @Route("/api/cards", name="create_cards", methods={"POST"})
     */
    public function CreateCard(Request $request, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $card = $serializer->deserialize($request->getContent(), Card::class, 'json');
        $em->persist($card);
        $em->flush();

        $jsonCard = $serializer->serialize($card, 'json');
        return new JsonResponse($jsonCard, Response::HTTP_CREATED, [], true);
    }
}
