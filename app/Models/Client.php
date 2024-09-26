<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class client extends User
{
    use HasFactory;

    protected $fillable=[
        "nom",
        "prenom",
        "password",
        "email",
        "ville",
        "adress",
        "Telephon"
    ];


}
