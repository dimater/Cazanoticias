<?php


namespace App\Domain\Repositories;


use App\ClientMV;
use App\Domain\Contracts\ClientContract;
use App\Domain\Entities\ClientPackage\ClientEntity;
use Illuminate\Database\Eloquent\Collection;

class ClientRepository implements ClientContract
{
    public function findAll()
    {
        $clients = ClientEntity::all();
        $c =  Collection::make(new ClientMV);
        foreach ($client in $clients)
    }

    public function store(ClientMV $clientMV)
    {
        $clientEntity = $clientMV->ToEntity();
        return $clientEntity->save();
    }
}
