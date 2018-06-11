<?php
namespace model;

class Tarif
{

    private $idTarif;

    private $studentCard;

    private $ReductionSixteenEighteen;

    public function __construct()
    {}

    function Tarif($idTarif, $studentCard, $ReductionSixteenEighteen)
    {
        $this->idTarif = $idTarif;
        $this->studentCard = $studentCard;
        $this->ReductionSixteenEighteen = $ReductionSixteenEighteen;
    }

    /**
     *
     * @return mixed
     */
    public function getIdTarif()
    {
        return $this->idTarif;
    }

    /**
     *
     * @return mixed
     */
    public function getStudentCard()
    {
        return $this->studentCard;
    }

    /**
     *
     * @return mixed
     */
    public function getReductionSixteenEighteen()
    {
        return $this->ReductionSixteenEighteen;
    }

    /**
     *
     * @param mixed $idTarif
     */
    public function setIdTarif($idTarif)
    {
        $this->idTarif = $idTarif;
    }

    /**
     *
     * @param mixed $studentCard
     */
    public function setStudentCard($studentCard)
    {
        $this->studentCard = $studentCard;
    }

    /**
     *
     * @param mixed $ReductionSixteenEighteen
     */
    public function setReductionSixteenEighteen($ReductionSixteenEighteen)
    {
        $this->ReductionSixteenEighteen = $ReductionSixteenEighteen;
    }
}

