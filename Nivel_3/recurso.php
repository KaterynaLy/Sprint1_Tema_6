<?php

class Recurso
{
    const PHP = "PHP";
    const CSS = "CSS";
    const HTML = "HTML";
    const SQL = "SQL";
    const LARAVEL = "Laravel";

    private $nom;
    private $tema;
    private $site;
    private $adjunto;

    public function __construct($nom, $tema, $site, $adjunto)
    {

        $this->nom = $nom;
        $this->tema = $tema;
        $this->site = $site;
        $this->adjunto = $adjunto;
    }
    function getNom()
    {
        return $this->nom;
    }
    function setNom($nom)
    {
        $this->nom = $nom;
    }
    function getTema()
    {
        return $this->tema;
    }
    function setTema($tema)
    {
        $this->tema = $tema;
    }
    function getSite()
    {
        return $this->site;
    }

    function setSite($site)
    {
        $this->site = $site;
    }
    function getadjunto()
    {
        return $this->adjunto;
    }
    function setAdjunto($adjunto)
    {
        $this->adjunto = $adjunto;
    }
}





