<?php

namespace App\Http\Controllers;

use App\Models\Entities\Example;
use App\Transformers\ExampleTransformer;
use Dingo\Api\Http\Request;
use Doctrine\ORM\EntityManagerInterface;

class ExampleController extends ApiController
{
    protected $EntityManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->EntityManager = $em;
    }

    public function get(int $id)
    {
        $example = $this->EntityManager->find('App\Models\Entities\Example', $id);

        return $this->response->item($example, new ExampleTransformer);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $example = new Example($data['name'],$data['example']);

        //save the Example, save the world!
        $this->EntityManager->persist($example);
        $this->EntityManager->flush();

        return $this->response->created(null);
    }
}
