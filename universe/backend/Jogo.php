<?php

namespace universe\backend;

class Jogo{
    private $sala;
    private $numero_jogadores;
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

    public function getSala(){
        return $this->sala;
    }

    public function setSala($sala){
        $this->sala = $sala;
        return $this;
    }

    public function getNumeroJogadores(){
        return $this->numero_jogadores;
    }

    public function setNumeroJogadores($numero_jogadores){
        $this->numero_jogadores = $numero_jogadores;
        return $this;
    }
}
