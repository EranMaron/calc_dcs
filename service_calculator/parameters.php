<?php

class getParameters {

    protected $num1 = 0;
    protected $num2 = 0;
    protected $num3 = 0;
    protected $func;

    public function __construct($_func, $_num1, $_num2, $_num3){

        $this->num1 = $_num1;
        $this->num2 = $_num2;
        $this->num3 = $_num3;
        $this->func = $_func;
    }

}

?>