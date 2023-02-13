<?php

namespace Tests\Unit;

use Tests\TestCase;

class TransaksiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_get_data_transaksi()
    {
        $this->json('get', 'api/getTransaction')
        ->assertStatus(200);
    }
}
