<?php


   require '../vendor/autoload.php';

   use KDAM\KhmerFormat\Utils\SolarUtil;
   use KDAM\KhmerFormat\Utils\LunarUtil;

   $result = new SolarUtil();
   $result->setDay(1);
   $result->setMonth(12);
   $result->setYear(2023);
   echo  $result->format();


   $result = new LunarUtil();
   $result->setDay(1);
   $result->setMonth(12);
   $result->setYear(2023);