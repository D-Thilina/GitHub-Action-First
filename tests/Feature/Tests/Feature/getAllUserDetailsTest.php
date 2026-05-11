<?php

namespace Tests\Feature;
use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

class getAllUserDetailsTest extends TestCase
{
    public function testGetAllUserDetails()
    {
        $response = $this->getJson('api/get-all-user-details');
        $response->assertStatus(200);
    }
}
