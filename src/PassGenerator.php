<?php

namespace PassGeneratorBundle;

class PassGenerator
{
    public function __construct
    (
        private readonly int $length,
    ){}
    public function createPassword(): string
    {
        return md5(rand(1,1000));
    }
}