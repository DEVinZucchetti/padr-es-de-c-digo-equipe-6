<?php

namespace App\Http\Services\Specie;

use App\Http\Repositories\SpecieRepository;

class GetAllSpeciesService
{
    private $specieRepository;

    public function __construct(SpecieRepository $specieRepository)
    {
        $this->specieRepository = $specieRepository;
    }

    public function handle()
    {
        return $this->specieRepository->getAll();
    }
}
