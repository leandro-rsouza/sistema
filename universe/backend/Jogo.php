<?php

namespace universe\backend;

class Jogo{
    private $mandante;
    private $visitante;

    public function getMandante(){
        return $this->mandante;
    }

    public function setMandante($mandante){
        $this->mandante = $mandante;
        return $this;
    }

    public function getVisitante(){
        return $this->visitante;
    }

    public function setVisitante($visitante){
        $this->visitante = $visitante;
        return $this;
    }

    public function partida($mandante, $visitante){
        $this->setMandante($mandante);
        $this->setVisitante($visitante);
    }
}
