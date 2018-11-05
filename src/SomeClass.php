<?php


class SomeClass
{
    use SomeTrait;


    public function doTrait(): int {
        return $this->traitCall("hello");

    }
}