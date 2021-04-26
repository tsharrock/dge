<?php

class DiscSearchCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function searchForDisc(AcceptanceTester $I)
    {
        //go to home page
        $I->amOnPage("/");
        $I->see('Hello World!');
        //type in innova wraith

        //see wraith info
    }
}
