<?php
namespace App\Application\Actions;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Log\LoggerInterface;
use Slim\Exception\HttpBadRequestException;
use Slim\Exception\HttpNotFoundException;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager as DB;
final class HelloAction
{
    private $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request, Response $response, array $args): Response 
    {
        $viewData = [
            'name' => 'World',
            'notifications' => [
                'message' => 'You are good!'
            ],
        ];
        
        return $this->twig->render($response, 'hello.twig', $viewData);
    }
    public function test(Request $request, Response $response, array $args): Response 
    {
        //throw new \RuntimeException('This is a test');
        $viewData = [
            'name' => $args['name'],
            'notifications' => [
                'message' => 'You are good!'
            ],
        ];
        $result = DB::select("select * from test");
        dd($result);
       //$response = $request;
        return $this->twig->render($response, 'hello.twig', $viewData);
        //return $response;
    }
}