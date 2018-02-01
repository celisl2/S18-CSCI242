<?php

class Logger {
    private $fh = null;
    
    public function __construct($filename)
    {
        echo "The constructor was called.";
        $this->fh = fopen($filename, 'a');
    }
    
    public function error($errorMessage)
    {
        fwrite($this->fh, "ERROR " . $errorMessage . "\n");
    }
    
    public function __destruct()
    {
        echo "The destructor was called.";
        fclose($this->fh);
    }
    
}
