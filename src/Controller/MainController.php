<?php

namespace App\Controller;

use App\Services\Operation\OperationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * Главная страничка с тестовой работой формы
     *
     * @Route("/", name="homepage")
     * @param Request $request
     */
    public function index(Request $request)
    {
        try {
            $result = OperationService::getResult((string)$request->get('text'), (array)$request->get('operations'));
        }
        catch (\Exception $ex){
            $result = "error data";
        }
        $result = array("text" => $result);
        return new Response(json_encode($result));
    }
}
