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

 /**
 * @Route ("/{taskId}/edit" , name="edit", requirements={"taskId"="\d+"})
 */
public function edit($taskId , $listingId, Request $request, EntityManagerInterface $entityManager){
    $task = $entityManager->getRepository(Task::class)->find($taskId);
    if (empty($task)){
        $this->addFlash(
            'warning',
            "Impossible de modifier la tâche"
        );
        return $this->redirectToRoute('listing_show',['listingId'=> $listingId]);
    }
    $name = $task->getName();
    $form = $this -> createForm(TaskType::class , $task);
    $form -> handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()){
        $entityManager->flush();
        $this->addFlash(
            'success',
            "La tache a été modifiée avec succés"
        );
        return $this->redirectToRoute('listing_show' , ['listingId' => $listingId ]);
    }
return $this->render('task.html.twig' , ['form' => $form->createView()]) ;
            }
        /**
    * @Route ("/{taskId}/delete", name="delete", requirements = {"taskId"="\d+"})
    */
    public function delete ($listingId, $taskId, EntityManagerInterface $entityManager){
      
        $task = $entityManager->getRepository(Task::class)->find($taskId);

        if (empty($task)){
            $this->addFlash(
                'warning',
                "Votre tâche n'a pu être supprimée, car elle n'existe pas"
            );
            return $this->redirectToRoute('listing_show',['listingId'=> $listingId]);
        }
        else {
            $entityManager->remove ($task);
            $entityManager->flush ();
            $name = $task->getName();
            $this->addFlash ("success-recycle", "Votre tâche « $name » a été supprimée avec succès");
    }
    return $this->redirectToRoute('listing_show' , ['listingId' => $listingId ]);
                            
        }
}