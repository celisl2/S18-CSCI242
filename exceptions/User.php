<?php


class User {
    private $username = "";
    private $age = 0;
    private $subscription = false;
    
    public function __construct() {
        
    }

    public function getUsername() {
        return $this->username;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSubscription() {
        return $this->subscription;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setSubscription($subscription) {
        $this->subscription = $subscription;
    }


}
