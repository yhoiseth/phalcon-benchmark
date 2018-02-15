<?php


class BenchmarkCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function helloWorld(AcceptanceTester $I)
    {
        $I->amOnPage('/benchmark/helloworld');

        $I->see('Hello World!');
    }
}
