<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $tabTitle = [
            'Les innovations technologiques en 2024',
            'Impact du changement climatique sur l\'agriculture',
        ];
        array_push($tabTitle, 'Développement durable : nouvelles stratégies pour les villes vertes');
        array_push($tabTitle, 'Avancées dans le traitement de l\'eau potable');
        array_push($tabTitle, 'L\'avenir de l\'éducation : intégration de la technologie dans les salles de classe');
        array_push($tabTitle, 'Santé mondiale : progrès dans la lutte contre les maladies émergentes');
        array_push($tabTitle, 'Économie globale : prédictions pour la prochaine décennie');
        array_push($tabTitle, 'Intelligence artificielle : éthique et applications futures');
        array_push($tabTitle, 'Tourisme spatial : quand les voyages hors de la Terre deviendront-ils mainstream?');
        array_push($tabTitle, 'Révolution des transports : l\'impact des véhicules autonomes');
        array_push($tabTitle, 'Sécurité des données : combattre les cyberattaques à l\'ère numérique');
        array_push($tabTitle, 'Cinéma et technologie : comment les réalités augmentée et virtuelle transforment l\'industrie du divertissement');

        $cardTitle = 'Hello World';
        $cardText = 'Ma déscription';
        $btnText = 'En savoir plus';

        return $this->render('home/index.html.twig', [
            'articles' => $tabTitle,
            'cardTitle' => $cardTitle,
            'cardText' => $cardText,
            'btnText' => $btnText

        ]);
    }
}
