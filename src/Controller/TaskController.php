<?php

namespace App\Controller ;

use App\Entity\Listing;
use App\Entity\Task;
use App\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
* @Route ("/{listingId}/task", name="task_", requirements = {"listingId"="\d+"})
*/

class TaskController extends AbstractController {

    /**
    * @Route ("/new", name="create")
    */
public function create ($listingId, Request $request, EntityManagerInterface $entityManager) {
    $listing = $entityManager->getRepository(Listing::class)->find($listingId);
    $task = new Task ();
    $task->setListing($listing);
    $form = $this->createForm (TaskType::class, $task);
    $form->handleRequest($request);
    
    

    if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist ($task);
            $entityManager->flush ();
            $this->addFlash ("success", "Votre tâche a été créée avec succès");
            return $this->redirectToRoute ('listing_show', ['listingId'=> $listingId]);

    }
    
        return $this->render ('task.html.twig', ['form' => $form->createView ()]);
}
    
            }