<?php

namespace Besmer\Controller;

use Besmer\Model\PersonHelper;

class PeopleController {
    
    public function people()
    {
        $args = array();
        
        $templDir = __DIR__ . "/../Views/";
        
        $loader = new \Twig_Loader_Filesystem($templDir);
        $twig = new \Twig_Environment($loader);
        
        $people =  PersonHelper::fetchPeople();
        
        $args['people'] = $people;
        
        return $twig->render('people.html.twig', $args);
    }
    
    public function person($id)
    {
        $args = array();
        
           
        $templDir = __DIR__ . "/../Views/";
        
        $loader = new \Twig_Loader_Filesystem($templDir);
        $twig = new \Twig_Environment($loader);
        
        $person = PersonHelper::fetchPerson($id);
        
        $args['person'] = $person;
        
        return $twig->render("person.html.twig", $args);
    }
    
}
