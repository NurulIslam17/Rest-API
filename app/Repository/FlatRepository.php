<?php

namespace App\Repository;

use App\Models\Flat;

class FlatRepository
{
    protected $flat;

    public function __construct(Flat $flat)
    {
        $this->flat = $flat;
    }

    public function getAllFlat(){
        return $this->flat->all();
    }

    public function save($request)
    {
        return $this->flat->create([
            "name" => $request['name'],
            "project_id" => $request['project_id'],
            "size" => $request['size'],
            "bed" => $request['bed'],
            "price" => $request['price'],
            "desc" => $request['desc']
        ]);
    }
}
