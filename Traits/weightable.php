<?php

trait Weightable {
    private $weight;

    public function setWeight($_weight) {
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            return 'Il peso deve essere positivo';
        }
    }

    public function getWeight() {
        return $this->weight . 'g';
    }
}