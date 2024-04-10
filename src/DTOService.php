<?php

namespace DTOServiceBundle;

class DTOService
{
    public function __construct
    (
        private readonly string $property,
    ){}
}