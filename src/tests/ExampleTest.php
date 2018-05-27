<?php

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    /**
     * Test to input data
     */
    public function test_post_example() {
        $response = $this->client->post("V1/example",
            [
                GuzzleHttp\RequestOptions::JSON => [
                    'name'=> $this->faker->randomNumber(),
                    'example'=> $this->faker->randomNumber()
                ]
            ]
        );

        $this->assertEquals(
            self::HTTP_CREATED,
            $response->getStatusCode()
        );
    }

    /**
     * Test return data of the POST test
     */
    public function test_get_example()
    {
        $response = $this->client->get("V1/example/1");

        //Compares guzzle response status with HTTP_OK
        $this->assertEquals(
            self::HTTP_OK,
            $response->getStatusCode()
        );

        $this->assertContains('date',$response->getBody());
        $this->assertContains('example_data',$response->getBody());
        $this->assertContains('example_name',$response->getBody());
    }


}
