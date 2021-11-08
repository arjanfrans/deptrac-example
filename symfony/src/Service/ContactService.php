<?php

namespace App\Service;

use App\Entity\Contact;
use App\Repository\ContactRepository;

class ContactService
{
    
    public function __construct(private ContactRepository $contactRepository)
    {
    }
    
    /**
     * @return Contact[]
     */
    public function findAllContacts(): array
    {
        return $this->contactRepository->findAll();
    }
}
