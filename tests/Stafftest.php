<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase
{
    public function testReturnsFullName()
    {
        require('Staff.php');

        $staff = new Staff;

        $staff->first_name = "Tran";
        $staff->last_name = "Tam";

        $this->assertEquals('Tran Tam', $staff->getFullName());
    }
    public function testFullNameIsEmptyByDefault()
    {
        $staff = new Staff;
        $this->assertEquals('', $staff->getFullName());
    }

    /**
     * @test
     */
    public function only_first_name()
    {
        $staff = new Staff;
        $staff->first_name = "Nguyen2";
        $this->assertEquals('Tran', $staff->getFullName());
    }
}
