<?php

namespace IsaEken\TurkiyeRegex\Tests;

use IsaEken\TurkiyeRegex\TurkiyeRegex;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testStaticFactory()
    {
        $this->assertTrue(TurkiyeRegex::CellPhone("05231231212"));
        $this->assertTrue(TurkiyeRegex::Phone("01231231212"));
        $this->assertFalse(TurkiyeRegex::Identity("1234567890"));
        $this->assertTrue(TurkiyeRegex::TaxNumber("1234567890"));
        $this->assertTrue(TurkiyeRegex::CreditCard("1111222233334444"));
        $this->assertTrue(TurkiyeRegex::CarPlate("34A2344"));
        $this->assertTrue(TurkiyeRegex::Date("10.04.2002"));
    }

    public function testAliasFactory()
    {
        $this->assertTrue(TurkiyeRegex::CellPhoneNumber("05231231212"));
        $this->assertTrue(TurkiyeRegex::PhoneNumber("01231231212"));
        $this->assertFalse(TurkiyeRegex::IdentityNumber("1234567890"));
        $this->assertTrue(TurkiyeRegex::Tax("1234567890"));
        $this->assertTrue(TurkiyeRegex::CreditCardNumber("1111222233334444"));
        $this->assertTrue(TurkiyeRegex::Plate("34A2344"));
        $this->assertTrue(TurkiyeRegex::BirthDate("10.04.2002"));
    }
}
