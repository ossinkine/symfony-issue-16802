<?php

namespace App\Controller;

use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index()
    {
        $data = [
            'text'   => 'foo',
            'choice' => 'foo',
        ];
        var_dump($data);
        $form = $this->createForm(TestType::class, $data);
        $form->submit(
            [
                'text'   => 'bar',
                'choice' => 'bar',
            ],
            false
        );
        var_dump($form->getData());

        return new Response();
    }
}
