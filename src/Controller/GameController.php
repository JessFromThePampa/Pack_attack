<?php


namespace App\Controller;

use App\Model\GameManager;

class GameController extends AbstractController
{

    public function index()
    {
        $mechants=[];
        $oeufs=[];
        $itemManager = new GameManager();
        for ($i = 0; $i < 2; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 2; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
            $items=array_merge($oeufs, $mechants);
            shuffle($items);

        return $this->twig->render('Game/Levelone.html.twig', ['items' => $items]);
    }

    public function success1()
    {
        return $this->twig->render('Game/Success1.html.twig');
    }

    public function success2()
    {
        return $this->twig->render('Game/Success2.html.twig');
    }
}
