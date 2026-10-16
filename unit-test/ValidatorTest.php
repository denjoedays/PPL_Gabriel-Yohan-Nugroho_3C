<?php
use PHPUnit\Framework\TestCase;

require_once 'Validator.php';

class ValidatorTest extends TestCase {

    public function testValidAge() {
        $this->assertTrue(validateAge(20));
    }

    public function testAgeNotNumber() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("dua puluh");
    }

    public function testAgeNegative() {
        $this->expectException(InvalidArgumentException::class);
        validateAge(-5);
    }

    public function testValidName() {
        $this->assertTrue(validateName("Gabriel Yohan Nugroho"));
    }

    public function testNameWithNumber() {
        $this->expectException(InvalidArgumentException::class);
        validateName("Gabriel1212");
    }

    public function testNameEmpty() {
        $this->expectException(Exception::class);
        validateName("");
    }
}
?>