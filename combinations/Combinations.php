<?php

abstract class Combinations extends CombinatorialAlgorithm implements CombinatorialProcessor
{
    public abstract function get(int $pos = 0, int $index = 0): \Generator;
}