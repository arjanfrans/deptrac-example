<?php

namespace App\Controller;

use App\Service\ContactService;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    #[Route('/contact', name: 'contact')]
    public function index(ContactService $contactService)
    {
        return $this->json($contactService->findAllContacts());
    }
}
