<?php
/**
 * Created by PhpStorm.
 * User: pafity
 * Date: 30.4.2019 г.
 * Time: 15:53
 */

class VariationsWithRepetition extends Variations
{
    public function get(int $pos = 0): \Generator
    {
        if ($pos === $this->classification) {
            yield array_slice($this->output, 0);
            return;
        }

        for ($i = 0; $i < $this->length; $i++) {
            $this->output[$pos] = $this->input[$i];
            yield from $this->get($pos + 1);
        }
    }
}