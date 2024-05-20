<?php
namespace Generator; 
 class CSSFormat{
    protected string $container; 
    protected string $template; 

    public function __construct(string $selector)
    {
        $this->container = $selector; 
        $this->template = $this->container . "{ "; 
    }


    public function set(string $element, string $val) : CSSFormat{
          $this->template .= "\n" . $element . ": " . $val . ";"; 
          return $this; 
    }

    public function finishTemplate(){
        $this->template .=  "\n" . "}"; 
    }

    public function getTemplate() : string{
        return $this->template; 
    }

    


}



?>