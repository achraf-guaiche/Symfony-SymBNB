<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function home()
    {
        return $this->render(
            'home.html.twig'
        );
    }
    /**
     * @Route("/hello/{prenom}/age/{age}",name="hello",requirements={"age"="\d+"})
     * @Route("/hello",name="hello_base")
     * @Route("hello/{prenom}",name="hello_firstname")
     * 
     */
    public function hello($prenom='anonyme',$age=0)
    {
        return $this->render(
            'hello.html.twig',
            [
                'prenom'=>$prenom,
                'age'=>$age
            ]
        );
    }
    /**
     * @Route("/lucky/number/{age}")
     */
    public function number($age)
    {
        /*$number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/
        return $this->render(
            'lucky.html.twig',
            [
                'title'=>'Hello World',
                'age'=>$age
            ]
        );
    }
}
