<?php
/**
 * Created by PhpStorm.
 * User: pafity
 * Date: 30.4.2019 г.
 * Time: 13:44
 */

class CombinationsWithoutRepetition extends Combinations
{
    public function get(int $pos = 0, int $index = 0): \Generator
    {
        if ($pos === $this->classification) {
            yield array_slice($this->output, 0);
            return;
        }

        for ($i = $index; $i < $this->length; $i++) {
            $this->output[$pos] = $this->input[$i];
            yield from $this->get($pos + 1, $i + 1);
        }
    }
}