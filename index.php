<?php
function arithmetic_operation($num1, $num2, $operator) {
    if ($operator == '+') {
        return $num1 + $num2;
    } elseif ($operator == '-') {
        return $num1 - $num2;
    } elseif ($operator == '*') {
        return $num1 * $num2;
    } elseif ($operator == '/') {
        if ($num2 == 0) {
            throw new Exception('Division by zero.');
        }
        return $num1 / $num2;
    } else {
        throw new Exception('Invalid operator.');
    }
}

function test_arithmetic_operation() {
    assert(arithmetic_operation(2, 3, '+') == 5);
    assert(arithmetic_operation(2, 3, '-') == -1);
    assert(arithmetic_operation(2, 3, '*') == 6);
}
?>