<?php
    namespace M2I\Poo\Controller;

    use M2i\Framework\AbstractController;
    use M2i\Poo\Entity\Contact;


    class AppController extends AbstractController
    {
        public function index(){
            $this->render('index.php', ["name"=> "Yazid"]);
        }

        public function contact(){
            $contact = new Contact;
            $contact->setName('Toto')
                    ->setEmail('Toto@ieaiue.php');

            $this->render('contact.php', ["contact" => $contact]);
        }
    }