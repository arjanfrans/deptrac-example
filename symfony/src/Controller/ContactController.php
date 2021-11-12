<?php

namespace App\Controller;

use App\Service\ContactService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    #[Route('/contact', methods: 'GET')]
    public function index(ContactService $contactService)
    {
        return $this->json($contactService->findAllContacts());
    }
    
    #[Route('/create-contact', methods: 'GET')]
    public function create(Request$request, ContactService $contactService)
    {
        return $this->json($contactService->createContact($request->query->get('id'), $request->query->get('name')));
    }
}
