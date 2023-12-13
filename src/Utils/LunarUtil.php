<?php
namespace KDAM\KhmerFormat\Utils;

class LunarUtil {

    private $dayOfWeek;
    private $day;
    private $month;
    private $zodiac;
    private $era;
    private $year;

    public function __construct($day = null, $month = null, $year = null) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    
    public function toString() {
        return sprintf("ថ្ងៃទី%s ខែ%s ឆ្នាំ%s",);
    }

    /**
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */ 
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get the value of month
     */ 
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set the value of month
     *
     * @return  self
     */ 
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of dayOfWeek
     */ 
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Set the value of dayOfWeek
     *
     * @return  self
     */ 
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get the value of zodiac
     */ 
    public function getZodiac()
    {
        return $this->zodiac;
    }

    /**
     * Set the value of zodiac
     *
     * @return  self
     */ 
    public function setZodiac($zodiac)
    {
        $this->zodiac = $zodiac;

        return $this;
    }

    /**
     * Get the value of era
     */ 
    public function getEra()
    {
        return $this->era;
    }

    /**
     * Set the value of era
     *
     * @return  self
     */ 
    public function setEra($era)
    {
        $this->era = $era;

        return $this;
    }
}