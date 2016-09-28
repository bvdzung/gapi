<?php

use Mockery as m;
use Gtk\Gapi\ApiResponse;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    protected $apiResponse;

    protected $manager;

    public function setUp()
    {
        $this->manager = m::mock('League\Fractal\Manager');

        $this->apiResponse = new ApiResponse($this->manager);
    }
}