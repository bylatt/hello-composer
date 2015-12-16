<?php

use \Hello\Hello;

class HelloTest extends PHPUnit_Framework_TestCase
{
  public function testSayAnything() {
    $said = new Hello();
    $this->assertEquals("X JAPAN ROCK!!", $said->sayAnything("X JAPAN ROCK!!"));
  }
}
