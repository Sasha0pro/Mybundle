<?php

namespace DTOServiceBundle;

class PassGenerator
{
    public function createPassword(): string
    {
        return md5(rand(1,1000));
    }
}