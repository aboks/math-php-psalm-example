<?php
use MathPHP\LinearAlgebra\NumericMatrix;
use MathPHP\LinearAlgebra\NumericSquareMatrix;
use MathPHP\LinearAlgebra\Vector;

$A = new NumericMatrix([[1, 2, 3], [4, 5, 6]]);
print_r($A);

$B = new NumericSquareMatrix([[1, 2], [3, 4]]);
print_r($B);

$v = new Vector([1, 2]);
print_r($v);