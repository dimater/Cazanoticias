<?php


namespace App\Domain\Entities\ClientPackage;


use Illuminate\Database\Eloquent\Model;

class ClientEntity extends Model
{
    protected $table = "clients";
    protected $primaryKey = 'id';
    protected $fillable = [
        "name",
        "lastName"
    ];
}
