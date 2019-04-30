<?php

abstract class Permutations extends CombinatorialAlgorithm implements CombinatorialProcessor
{
    public function __construct(array $input)
    {
        parent::__construct($input, $classification = count($input));
    }

    public abstract function get(int $pos = 0): \Generator;
}