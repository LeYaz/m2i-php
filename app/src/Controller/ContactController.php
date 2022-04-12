<?php
    namespace M2I\Poo\Controller;

    use M2i\Framework\AbstractController;
    use M2i\Poo\Entity\Contact;


    class ContactController extends AbstractController
    {
        // private $connection = new PDO("host:mysql;dbname=dbphp", "root", "paris");

        public function getContact(){
            $connection = new PDO("host:mysql;dbname=dbphp", "root", "paris");
            $contactsStatement = $db->prepare('SELECT * FROM contact');
            $contactsStatement->execute();
            $contacts = $contactsStatement->fetchAll();

            $this->render('contact.php', $contacts);
            
        }

        public function createContact(){
            
        }

        public function updateContact(){
            
        }
        
        public function deleteContact(){
            
        }
    }