<?php

namespace M2i\Poo\Service;

use M2i\Poo\Entity\Contact;
use M2i\Framework\AbstractService;

class ContactService extends AbstractService
{
    public function create($contact)
    {
        $request = $this->connection->prepare(
            'INSERT INTO `contact` (name, email) VALUE (:name, :email)'
        );
        $request->bindValue('name', $contact->getName());
        $request->bindValue('email', $contact->getEmail());

        $request->execute();
    }
}