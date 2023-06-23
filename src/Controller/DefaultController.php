<?php declare(strict_types = 1);

namespace App\Controller;

use App\Service\FooService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class DefaultController {
    #[Route(path: '/', name: 'app_home')]
    public function index(FooService $fooService): Response {
        dd($fooService);
    }
}
