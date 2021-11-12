<?php

namespace App\Service;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\Validator\Exception\LogicException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactService
{
    
    public function __construct(private ContactRepository $contactRepository, private ValidatorInterface $validator)
    {
    }
    
    public function createContact(int $id, string $name): Contact
    {
        $contact = new Contact($id, $name);
        
        $violations = $this->validator->validate($contact);
        
        if (count($violations) > 0) {
            throw new LogicException('Validation failed');
        }
        
        return $contact;
    }
    
    /**
     * @return Contact[]
     */
    public function findAllContacts(): array
    {
        return $this->contactRepository->findAll();
    }
}
