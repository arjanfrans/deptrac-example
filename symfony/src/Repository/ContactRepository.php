<?php

namespace App\Repository;

use App\Entity\Contact;

class ContactRepository
{
    /**
     * @return Contact[]
     */
    private static function contacts(): array
    {
        return [
            new Contact(1, 'Rogier Esmée'),
            new Contact(2, 'Katinka Theun'),
            new Contact(3, 'Theunis Mirte'),
            new Contact(4, 'Xandra Diede'),
        ];
    }
    
    /**
     * @return Contact[]
     */
    public function findAll(): array
    {
        return self::contacts();
    }
}
