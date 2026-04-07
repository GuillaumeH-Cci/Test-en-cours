<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;

final class HelloWorldController extends AbstractController
{
    #[Route('/hello/world', name: 'app_hello_world')]
    public function index(): Response
    {
        $arrPokemons = [
            ['number' => 1, 'name' => 'Bulbizarre', 'type' => 'Plante'],
            ['number' => 4, 'name' => 'Salamèche',  'type' => 'Feu'],
            ['number' => 7, 'name' => 'Carapuce',   'type' => 'Eau'],
        ];

        return $this->render('hello_world/index.html.twig', [
            'controller_name'   => 'HelloWorldController',
            'pokemonList'       => $arrPokemons
        ]);
    }

    #[Route('/email', name: 'app_test_mail')]
    public function email(MailerInterface $mailer): Response
    {
        $email = (new TemplatedEmail())
            ->from('mailtrap@example.com')
            ->to('guillaumehess411@gmail.fr')
            ->subject('Sa marche connard')

            ->htmlTemplate('emails/test.html.twig')
            ->context([
                'name' => 'Guillaume'
            ]);

        $mailer->send($email);

        return $this->redirectToRoute('app_hello_world');
    }
}
