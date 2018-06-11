<?php
namespace model;

class Genre
{

    private $id;

    private $libelle;

    function Genre()
    {}

    function Genre($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}

