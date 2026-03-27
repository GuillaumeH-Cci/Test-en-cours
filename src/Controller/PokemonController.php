<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PokemonController extends AbstractController
{
    #[Route('/pokemon', name: 'app_pokemon')]
    public function index(): Response
    {
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
        ]);
    }

    #[Route('/pokemon/create', name: 'app_pokemon_create')]
    public function create(Request $request): Response
    {
        $strPokemonName = $request->query->get('name');
        $strPokemonType = $request->query->get('type');

        // Création d'un objet Pokemon avec les données du formulaire
        $objPokemon = new Pokemon();
        $objPokemon ->setName($strPokemonName)
                    ->setType($strPokemonType);

        dd($request);

        return $this->render('pokemon/create.html.twig', [
            
        ]);
    }
}
