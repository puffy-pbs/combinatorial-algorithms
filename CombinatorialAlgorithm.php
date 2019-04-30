<?php

abstract class CombinatorialAlgorithm
{
    protected $input;
    protected $classification;
    protected $length;
    protected $output;

    public function __construct(array $input, int $classification)
    {
        $this->input = $input;
        $this->classification = $classification;
        $this->length = count($input);
        $this->output = [];
    }
}
