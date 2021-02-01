<?php
class Form{
    private $formNam;
    private $request;
    private $action;
    private $method;
    private $target;

    function __construct($formName,$request,$action="index.php",$method="get",$target="_self")
    {
        $this->formNam=$formName;
        $this->request=$request;
        $this->action=$action;
        $this->method=$method;
        $this->target=$target;
    }
    function __toString()
    {
        
    }
}