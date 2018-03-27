<?php

require_once('bootstrap.php');

// $entityManager exists

use Besmer\Model\Album;
use Besmer\Model\Track;

/* Inserting into the database
 * 

$sweetEscape = new Album();

$sweetEscape->setArtist('Gwen Stefani');
$sweetEscape->setTitle('Sweet Escape');

$entityManager->persist($sweetEscape);

$entityManager->flush();
  */


/* Select out of the database
 * 


$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array());

var_dump($results);
 * 
 *  
 */


/** Updating the database
 * 
$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array('artist' => 'Gwen Stefani'));

foreach($results as $result)
{
    $result->setArtist('Gwen');
    //$entityManager->persist($result); //DO NOT DO THIS!
    //$entityManager->flush(); //ALSO DONT DO THIS
}

$entityManager->flush();
 
*/

/* Updating just one
 * 
 
$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$result = $albumRepo->findOneBy(array('artist' => 'Gwen Stefani'));

$result->setArtist('Gwen');

$entityManager->flush();

// OR 

$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$result = $albumRepo->findOneBy(array('id' => 3));

$result->setArtist('Gwen');

$entityManager->flush();
 * 
 * */

/* To remove
 * 

$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$result = $albumRepo->findOneBy(array('id' => 2));

$entityManager->remove($result);

$entityManager->flush();

  */

/* To delete everything!
$albumRepo = $entityManager->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array());

foreach ($results as $result)
{
    $entityManager->remove($result);
    
}

$entityManager->flush();
 */ 


$sweetEscape = new Album();

$sweetEscape->setArtist('Gwen Stefani');
$sweetEscape->setTitle('Sweet Escape');

$entityManager->persist($sweetEscape);

$track1 = new Track();
$track1->setName("Holla Back Girl");
$track1->setLength(200);

$track2 = new Track();
$track2->setName("The Sweet Escape");
$track2->setLength(100);

$sweetEscape->addTrack($track1);
$sweetEscape->addTrack($track2);

$entityManager->flush();
