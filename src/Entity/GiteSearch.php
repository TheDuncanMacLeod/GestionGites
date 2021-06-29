<?php
namespace App\Entity;

class GiteSearch {

    private $minSurface;
    private $maxBedrooms;
    private $findCity;
    private $AcceptAnimals;


    /**
     * Get the value of minSurface
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @return  self
     */ 
    public function setMinSurface(int $minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * Get the value of maxBedrooms
     */ 
    public function getMaxBedrooms()
    {
        return $this->maxBedrooms;
    }

    /**
     * Set the value of maxBedrooms
     *
     * @return  self
     */ 
    public function setMaxBedrooms(int $maxBedrooms)
    {
        $this->maxBedrooms = $maxBedrooms;

        return $this;
    }

    /**
     * Get the value of findCity
     */ 
    public function getFindCity()
    {
        return $this->findCity;
    }

    /**
     * Set the value of findCity
     *
     * @return  self
     */ 
    public function setFindCity($findCity)
    {
        $this->findCity = $findCity;

        return $this;
    }

    /**
     * Get the value of AcceptAnimals
     */ 
    public function getAcceptAnimals()
    {
        return $this->AcceptAnimals;
    }

    /**
     * Set the value of AcceptAnimals
     *
     * @return  self
     */ 
    public function setAcceptAnimals($AcceptAnimals)
    {
        $this->AcceptAnimals = $AcceptAnimals;

        return $this;
    }
}