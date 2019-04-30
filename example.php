<?php

require_once('autoload.php');

// Combinations With Repetition
$combinations = new CombinationsWithRepetition(range(1, 8), 3);
foreach ($combinations->get() as $combination) {
    var_dump($combination);
}

// Combinations Without Repetition
$combinations = new CombinationsWithoutRepetition(range(1, 8), 3);
foreach ($combinations->get() as $combination) {
    var_dump($combination);
}

// Permutations With Repetition
$permutations = new PermutationsWithRepetition(['a', 'b']);
foreach ($permutations->get() as $permutations) {
    var_dump($permutations);
}

// Permutations Without Repetition
$permutations = new PermutationsWithoutRepetition(['a', 'b', 'c']);
foreach ($permutations->get() as $permutations) {
    var_dump($permutations);
}

// Variations With Repetition
$variations = new VariationsWithRepetition(['a', 'b'], 2);
foreach ($variations->get() as $variation) {
    var_dump($variation);
}

// Variations Without Repetition
$variations = new VariationsWithoutRepetition(['a', 'b'], 2);
foreach ($variations->get() as $variation) {
    var_dump($variation);
}