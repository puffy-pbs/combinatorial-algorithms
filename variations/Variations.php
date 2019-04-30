<?php

abstract class Variations extends CombinatorialAlgorithm implements CombinatorialProcessor
{
    public abstract function get(int $pos = 0): \Generator;
}