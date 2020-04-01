<?php


namespace App;


use App\Domain\Entities\ClientPackage\ClientEntity;

class ClientMV
{
    protected $name;
    protected $lastName;

    public function __construct(ClientEntity $clientEntity)
    {
        $this->name = $clientEntity->name;
        $this->lastName = $clientEntity->lastName;
    }

    public function ToEntity() : ClientEntity
    {
        $clientEntity = new ClientEntity();
        $clientEntity->fill($this->ToArray());
        return $clientEntity;
    }

    private function ToArray()
    {
        return [
            'name' => $this->name,
            'lastName' => $this->lastName
        ];
    }
}
