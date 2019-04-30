<?php
/**
 * Created by PhpStorm.
 * User: pafity
 * Date: 30.4.2019 г.
 * Time: 15:14
 */

class PermutationsWithRepetition extends Permutations
{
    public function get(int $pos = 0): \Generator
    {
        if ($pos === $this->classification) {
            yield array_slice($this->output, 0);
            return;
        }

        for ($i = 0; $i < $this->length; $i++) {
            $char = $this->input[$i];
            $this->output[$pos] = $char;
            yield from $this->get($pos + 1);
        }
    }
}