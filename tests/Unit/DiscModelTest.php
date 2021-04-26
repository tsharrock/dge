<?php

use App\Models\Disc;

class DiscModelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testDiscModel()
    {
        //grab a record
        $innovaDisc = Disc::where('Brand', 'Innova-Champion Discs')->first();
        //verify the record is there
        $this->assertTrue($innovaDisc->Brand === "Innova-Champion Discs");
    }
}
