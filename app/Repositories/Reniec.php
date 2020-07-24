<?php

namespace App\Repositories;

use Peru\Jne\Dni as PeruReniec;
use Peru\Sunat\UserValidator;
use Peru\Sunat\Ruc;

class Reniec 
{
    protected $reniec;
    protected $user;

    public function __construct(PeruReniec $reniec, UserValidator $user, Ruc $ruc)
    {
        $this->reniec = $reniec;
        $this->user = $user;
        $this->ruc = $ruc;
    }

    public function dni(String $dni)
    {
        return $this->reniec->get($dni);
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