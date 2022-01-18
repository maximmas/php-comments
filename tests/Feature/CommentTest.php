<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{


    public function test_add_comment():void
    {

       $formData = [
         'name' => "Test Person 1",
         'message' => "Test Message 1"
       ];

       $response = $this->post(route('create'), $formData);

        $this->assertEquals(302, $response->getStatusCode());

    }
}
