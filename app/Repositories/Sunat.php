<?php

namespace App\Repositories;

use Peru\Sunat\UserValidator;
use Peru\Sunat\Ruc;

class Sunat 
{
    protected $user;

    public function __construct(PeruReniec $reniec, UserValidator $user, Ruc $ruc)
    {
        $this->user = $user;
        $this->ruc = $ruc;
    }


    public function valid(int $ruc, int $dni)
    {
        return $this->user->valid($ruc, $dni);
    }

    public function ruc(int $ruc)
    {
        return $this->ruc->get($ruc);
    }
}