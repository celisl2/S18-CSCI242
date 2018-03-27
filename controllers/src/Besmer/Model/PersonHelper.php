<?php

namespace Besmer\Model;

use Besmer\Model\Person;

class PersonHelper {
    
    public static function fetchPeople()
    {
        $json = file_get_contents(__DIR__ . "/data/people.json");
        $json = json_decode($json);
        
        $results = array();
        
        foreach($json as $tempPerson)
        {
            $person = new Person();
            $person->setId($tempPerson->id);
            $person->setName($tempPerson->name);
            $person->setEmail($tempPerson->email);
        
            $results[] = $person;
        }
        
        return $results;
        
    }
    
    
    public static function fetchPerson($id)
    {
        $people = self::fetchPeople();
        
        $result = null;
        
        foreach($people as $person)
        {
            if($id == $person->getId())
            {
                $result = $person;
                break;
                        
            }
        }
        
        return $result;
        
    }
    
        
}

