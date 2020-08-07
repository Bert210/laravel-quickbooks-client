<?php

namespace Spinen\QuickBooks;

use Spinen\QuickBooks\Stubs\User;

/**
 * Class HasQuickBooksTokenTest
 *
 * @package Spinen\QuickBooks
 */
class HasQuickBooksTokenTest extends TestCase
{
    /**
     * @var User
     */
    protected $model;

    protected function setUp(): void
    {
        parent::setUp();

        $model = config('quickbooks.model.model');

        $this->model = new $model();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(config('quickbooks.model.model'), $this->model);
    }

    /**
     * @test
     */
    public function it_has_a_hasOne_relationship_to_token()
    {
        // The stub is just returning the relationship name, so making sure that it is the Token class
        $this->assertEquals(Token::class, $this->model->quickBooksToken());
    }
}

