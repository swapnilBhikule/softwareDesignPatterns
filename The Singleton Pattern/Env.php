<?php

class Env
{
    private $credentials;
    private static $instance;

    /**
     * Defining constructor private makes client impossible to initialize
     * object of a class out side the class.
     */
    private function __construct()
    {
    }

    public static function getInstance() : Env
    {
        if (empty(self::$instance)) {
            self::$instance = new Env;
        }

        return self::$instance;
    }

    public function setCredentials(array $data)
    {
        // some validation for $data
        $this->credentials = $data;
    }

    public function getCredentials() : array
    {
        return $this->credentials;
    }
}

$object = Env::getInstance();
$object->setCredentials(['user' => 'root', 'password' => 'mysql']);
var_dump($object->getCredentials());

// Checking if we are getting the same object back rather than newly created
// object
$object = Env::getInstance();
var_dump($object->getCredentials());
