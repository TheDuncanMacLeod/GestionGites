<?php

namespace App\Notification;

use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification {
private $mailer;

    public function __construct(MailerInterface $mailer){
        $this->mailer = $mailer;
    }
    
    public function notify(Contact $contact)
    {
            $email= (new Email())
                    ->from("contact@projica.fr")
                    ->to($contact->getEmail())
                    ->subject("Demande de contact")
                    ->text("Je suis {$contact->getFirstname()} et j'aimerais avoir 
                    des renseignements sur le Gite {$contact->getGite()->getName()} : 
                    {$contact->getMessage()}
                    ");
            $this->mailer->send($email);
        }

}