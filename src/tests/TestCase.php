<?php
use Faker\Factory;
use Lukasoppermann\Httpstatus\Httpstatuscodes;

abstract class TestCase extends Laravel\Lumen\Testing\TestCase implements Httpstatuscodes
{
    protected $client;
    protected $faker;
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    public function setUp()
    {
        parent::setUp();

        //creating a guzzle client gives us more flexibility to work on tests than lumen's own http client
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost',
            'exceptions' => false,
        ]);

        //creates a Faker factory to generate test data
        $factory= new Factory();
        $this->faker = $factory->create();

    }
}
