<?php
require_once('User.php');
require_once('Movie.php');
require_once('NoSubscriptionException.php');
require_once('RatedRException.php');

class Mp4Stream {
    private static  $apiServer = 'https://api.netflix.com/';
    
    public static function getMp4Stream(Movie $movie, User $user)
    {
        if($user->getSubscription() == false)
        {
            //an error has occured
            throw new NoSubscriptionException();
        }
        
        if($movie->getRating() == 'R' && $user->getAge() < 17)
        {
            throw new RatedRException();
        }
        
        //other checks
        
        return self::$apiServer . $movie->getTitle() . '.mp4';
    }
}
