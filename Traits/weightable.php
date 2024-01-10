<?php

trait Weightable {
    private $weight;

    public function setWeight($_weight) {
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            return 'Error: peso deve essere numero positivo';
        }
    }

    public function getWeight() {
        return $this->weight . 'kg';
    }
}