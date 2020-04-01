<?php

namespace App\Http\Controllers;

use App\Domain\Contracts\ClientContract;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $repository;

    public function __construct(ClientContract $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->findAll();
    }
}
