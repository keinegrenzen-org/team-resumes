<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;

class DefaultController extends AbstractController
{

    /**
     * @Route (path="/{name}")
     * @noinspection PhpRedundantCatchClauseInspection
     */
    public function resume(string $name): Response
    {
        try {
            return $this->render("/resumes/{$name}.html.twig");
        } catch (LoaderError $loaderError) {
            throw $this->createNotFoundException();
        }
    }

}
