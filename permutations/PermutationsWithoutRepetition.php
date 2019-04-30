<?php

class PermutationsWithoutRepetition extends Permutations
{

    private $usedByLetter;
    private $used;

    public function __construct(array $input)
    {
        parent::__construct($input, count($input));
        $this->usedByLetter = [];
        $this->used = [];
        $this->setUsedArray();
    }

    private function setUsedArray(): void
    {
        for ($i = 0; $i < $this->length; $i++) {
            if (!array_key_exists($this->input[$i], $this->usedByLetter)) {
                $this->usedByLetter[$this->input[$i]] = [];
            }
            $this->used[$i] = false;
        }
    }

    public function get(int $pos = 0): \Generator
    {
        if ($pos === $this->classification) {
            yield array_slice($this->output, 0);
            return;
        }

        for ($i = 0; $i < $this->length; $i++) {
            $char = $this->input[$i];
            $found = array_filter(array_keys($this->usedByLetter[$char]), function ($x) use ($i) { return $i > $x; });
            $this->output[$pos] = $char;
            if (!$this->used[$i] && !$found) {
                $this->used[$i] = true;
                $this->usedByLetter[$char][$i] = true;
                yield from $this->get($pos + 1);
                unset($this->usedByLetter[$char][$i]);
                $this->used[$i] = false;
            }
        }
    }
}