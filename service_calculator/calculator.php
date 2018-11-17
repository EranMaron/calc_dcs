<?php

include "parameters.php";

class calculator extends getParameters {

    public function calc () {

        switch ($this->func) {
            case 'sum':
                $this->res = $this->sum();
                break;
            case 'mult':
                $this->res = $this->mult();
                break;
            case 'avg':
                $this->res = $this->avg();
                break;
            default:
                echo "Error";
        }
    }

    /* FUNCTIONS */

    private function sum () {

        return ($this->num1 +  $this->num2 +  $this->num3);
    }

    private function mult () {

        return $this->num1 *  $this->num2 *  $this->num3;
    }

    private function avg () {

        return ($this->num1 +  $this->num2 +  $this->num3) / 3;
    }  
}

?>