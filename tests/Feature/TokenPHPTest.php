<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class TokenPHPTest extends TestCase
{

  public function testColors() {
    $token = new Token("Blue");
    $token2 = new Token("Red");
    $this->expectException($token3 = new Token("red"));
    $this->expectException($token4 = new Token("notBlue"));

    assertTrue($token->color() == "Blue");
    assertTrue($token2->color() == "Red");
}