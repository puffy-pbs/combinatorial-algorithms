<?php
/**
 * Created by PhpStorm.
 * User: pafity
 * Date: 30.4.2019 г.
 * Time: 15:36
 */

class VariationsWithoutRepetition extends Variations
{
    private $used;

    public function __construct(array $input, int $classification)
    {
        parent::__construct($input, $classification);
        $this->setUsedArray();
    }

    private function setUsedArray(): void
    {
        $used = array_map(function () { return false; }, range(0, $this->length));
        $this->used = $used;
    }

    public function get(int $pos = 0): \Generator
    {
        if ($pos === $this->classification) {
            yield array_slice($this->output, 0);
            return;
        }

        for ($i = 0; $i < $this->length; $i++) {
            $this->output[$pos] = $this->input[$i];
            if (!$this->used[$i]) {
                $this->used[$i] = true;
                yield from $this->get($pos + 1);
                $this->used[$i] = false;
            }
        }
    }
}