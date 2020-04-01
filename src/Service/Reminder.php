<?php

namespace App\Service;

use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;

class Reminder {

    protected $entityManager;
    protected $taskRepository;
    protected $templating;
    protected $mailer;

    protected $reminderEmailFrom;
    protected $reminderEmailTo;
    
    public function __construct(EntityManagerInterface $entityManager, TaskRepository $taskRepository, Environment $templating, \Swift_Mailer $mailer)
    {
        $this->entityManager = $entityManager;
        $this->taskRepository = $taskRepository;

        $this->templating = $templating;
        $this->mailer= $mailer;
        $this->reminderEmailFrom = 'cypress2107@gmail.com';
        $this->reminderEmailTo = 'm.ouzera@orange.fr';
    }

    public function remind ()
    {
        $tasks = $this->taskRepository->findAllToRemind(new \DateTime());
        
        foreach ($tasks as $task) {
        $message = (new \Swift_Message("Une tâche doit être réalisée"))
            ->setFrom($this->reminderEmailFrom)
            ->setTo($this->reminderEmailTo)
            ->setBody(
                $this->templating->render(
                    'emails/reminder.html.twig',
                    ['task' => $task]
                ),
                'text/html'
            )
            ->addPart($this->templating->render(
                    'emails/reminder.txt.twig',
                    ['task' => $task]
            ),
                'text/plain'
        );

        $this->mailer->send($message);
        $task->setReminderDone(true);
    }
        $this->entityManager->flush();
        return sizeof($tasks);
    
    }
}