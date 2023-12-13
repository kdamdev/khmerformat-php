<?php
use PHPUnit\Framework\TestCase;

require 'src/Utils/KhmerSolarDate.php';

class KhmerDateTimeTest extends TestCase {
    public function testAddition() {
        $result = new \KDAM\KhmerDateTime\Utils\KhmerSolarDate();
        assert(false, $result->toString());
    }

}
