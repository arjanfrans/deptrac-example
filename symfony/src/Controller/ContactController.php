<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    #[Route('/contact', name: 'contact')]
    public function index(ContactRepository $contactRepository)
    {
        return $this->json($contactRepository->findAll());
    }
}
