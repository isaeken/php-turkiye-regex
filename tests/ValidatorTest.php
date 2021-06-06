<?php

namespace IsaEken\TurkiyeRegex\Tests;

use IsaEken\TurkiyeRegex\Validators\CarPlate;
use IsaEken\TurkiyeRegex\Validators\CellPhone;
use IsaEken\TurkiyeRegex\Validators\CreditCard;
use IsaEken\TurkiyeRegex\Validators\Date;
use IsaEken\TurkiyeRegex\Validators\Identity;
use IsaEken\TurkiyeRegex\Validators\Phone;
use IsaEken\TurkiyeRegex\Validators\TaxNumber;
use IsaEken\TurkiyeRegex\Validators\TcKimlikNo;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testCellPhones()
    {
        $this->assertTrue(CellPhone::validate("05231231212"));
        $this->assertTrue(CellPhone::validate("0523 123 12 12"));
        $this->assertFalse(CellPhone::validate("0123456789"));
        $this->assertFalse(CellPhone::validate("1234567890"));

        $this->assertTrue(CellPhone::validate(["05231231212", "0523 123 12 12"]));
        $this->assertFalse(CellPhone::validate(["0123456789", "1234567890"]));
    }

    public function testPhones()
    {
        $this->assertTrue(Phone::validate("01231231212"));
        $this->assertTrue(Phone::validate("0123 123 12 12"));
        $this->assertTrue(Phone::validate(["01231231212", "0123 123 12 12"]));
    }

    public function testIdentity()
    {
        $this->assertFalse(Identity::validate("1234567890"));
        $this->assertFalse(TcKimlikNo::validate("1234567890"));
    }

    public function testTaxNumber()
    {
        $this->assertTrue(TaxNumber::validate("1234567890"));
    }

    public function testCreditCard()
    {
        $this->assertTrue(CreditCard::validate("1111222233334444"));
        $this->assertTrue(CreditCard::validate("1111 2222 3333 4444"));
    }

    public function testCarPlate()
    {
        $this->assertTrue(CarPlate::validate("34A2344"));
        $this->assertTrue(CarPlate::validate("34A23415"));
        $this->assertTrue(CarPlate::validate("06BK123"));
        $this->assertTrue(CarPlate::validate("06JK1234"));
        $this->assertTrue(CarPlate::validate("81ABC75"));
    }

    public function testDate()
    {
        $this->assertTrue(Date::validate("10.04.2002"));
        $this->assertTrue(Date::validate("10042002"));
        $this->assertTrue(Date::validate("10/04/2002"));
        $this->assertTrue(Date::validate("10-04-2002"));
        $this->assertTrue(Date::validate("10 04 2002"));
    }
}
