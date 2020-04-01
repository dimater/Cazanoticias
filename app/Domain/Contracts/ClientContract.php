<?php


namespace App\Domain\Contracts;


use App\ClientMV;

interface ClientContract
{
    public function findAll();
    public function store(ClientMV $clientMV);
}
