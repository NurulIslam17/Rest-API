<?php

namespace App\Services;

use App\Repository\FlatRepository;

class FlatService
{

    protected $flatRepository;

    public function __construct(FlatRepository $flatRepository)
    {
        $this->flatRepository = $flatRepository;
    }

    public function getAllFlat()
    {
        return $this->flatRepository->getAllFlat();
    }

    public function save($request)
    {
        return $this->flatRepository->save($request);
    }
}
