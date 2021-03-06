<?php

namespace AppBundle\Entity;

/**
 * Campeonato
 */
class Campeonato
{
    /**
     * @var integer
     */
    private $idCamp;

    /**
     * @var string
     */
    private $nameCamp;

    /**
     * @var \DateTime
     */
    private $fechInic;

    /**
     * @var \DateTime
     */
    private $fechFina;

    /**
     * @var integer
     */
    private $precInsc;

    /**
     * @var string
     */
    private $descCamp;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var string
     */
    private $urlFoto;

    /**
     * @var \AppBundle\Entity\Complejo
     */
    private $idComp;


    /**
     * Get idCamp
     *
     * @return integer
     */
    public function getIdCamp()
    {
        return $this->idCamp;
    }

    /**
     * Set nameCamp
     *
     * @param string $nameCamp
     *
     * @return Campeonato
     */
    public function setNameCamp($nameCamp)
    {
        $this->nameCamp = $nameCamp;

        return $this;
    }

    /**
     * Get nameCamp
     *
     * @return string
     */
    public function getNameCamp()
    {
        return $this->nameCamp;
    }

    /**
     * Set fechInic
     *
     * @param \DateTime $fechInic
     *
     * @return Campeonato
     */
    public function setFechInic($fechInic)
    {
        $this->fechInic = $fechInic;

        return $this;
    }

    /**
     * Get fechInic
     *
     * @return \DateTime
     */
    public function getFechInic()
    {
        return $this->fechInic;
    }

    /**
     * Set fechFina
     *
     * @param \DateTime $fechFina
     *
     * @return Campeonato
     */
    public function setFechFina($fechFina)
    {
        $this->fechFina = $fechFina;

        return $this;
    }

    /**
     * Get fechFina
     *
     * @return \DateTime
     */
    public function getFechFina()
    {
        return $this->fechFina;
    }

    /**
     * Set precInsc
     *
     * @param integer $precInsc
     *
     * @return Campeonato
     */
    public function setPrecInsc($precInsc)
    {
        $this->precInsc = $precInsc;

        return $this;
    }

    /**
     * Get precInsc
     *
     * @return integer
     */
    public function getPrecInsc()
    {
        return $this->precInsc;
    }

    /**
     * Set descCamp
     *
     * @param string $descCamp
     *
     * @return Campeonato
     */
    public function setDescCamp($descCamp)
    {
        $this->descCamp = $descCamp;

        return $this;
    }

    /**
     * Get descCamp
     *
     * @return string
     */
    public function getDescCamp()
    {
        return $this->descCamp;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Campeonato
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set urlFoto
     *
     * @param string $urlFoto
     *
     * @return Campeonato
     */
    public function setUrlFoto($urlFoto)
    {
        $this->urlFoto = $urlFoto;

        return $this;
    }

    /**
     * Get urlFoto
     *
     * @return string
     */
    public function getUrlFoto()
    {
        return $this->urlFoto;
    }

    /**
     * Set idComp
     *
     * @param \AppBundle\Entity\Complejo $idComp
     *
     * @return Campeonato
     */
    public function setIdComp(\AppBundle\Entity\Complejo $idComp)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
     * Get idComp
     *
     * @return \AppBundle\Entity\Complejo
     */
    public function getIdComp()
    {
        return $this->idComp;
    }




}
