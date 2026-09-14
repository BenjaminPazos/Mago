<?php

require_once("Mago.php");

class Curandeiro extends Mago {
    private int $forcaDeCura;
    public function LancarPoder(){

    }

    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}