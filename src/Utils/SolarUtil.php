<?php
namespace KDAM\KhmerFormat\Utils;

use KDAM\KhmerFormat\Constraints\SolarMonth;

class SolarUtil {
    
    private $day;
    private $month;
    private $year;

    public function __construct($day = null, $month = null, $year = null) {
        //$datetime = mktime(0,0,0,12,11,2023);
        $this->day = NumericUtil::numbers($day);
        $this->month = $month ? SolarMonth::$month[--$month] : '';
        $this->year = NumericUtil::numbers($year);
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
     * @return  string
     */ 
    public function setYear($year)
    {
        $this->year =  NumericUtil::numbers($year);
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
     * @return  string
     */ 
    public function setMonth($month)
    {
        $this->month =   SolarMonth::$month[--$month];
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
     * @return string
     */ 
    public function setDay($day)
    {
        $this->day =  NumericUtil::numbers($day);
    }

    public function format() {
        return sprintf("ថ្ងៃទី%s ខែ%s ឆ្នាំ%s", $this->day, $this->month, $this->year);
    }
}