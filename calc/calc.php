<?php
    $operationValue = 0;

    function calc($operator = NULL, $number = NULL) {
        global $operationValue;
        
        if ($number !== NULL && $operator) {
            if (is_numeric($number)) {
                switch ($operator) {
                    case '=':
                        $operationValue = $number;
                        break;
                    case '+':
                        $operationValue += $number;
                        break;
                    case '-':
                        $operationValue -= $number;
                        break;
                    case '*':
                        $operationValue *= $number;
                        break;
                    case '/':
                        if ($number != 0) {
                            $operationValue /= $number;
                        } else {
                            return "Division by 0!";
                        }
                        break;
                    case '%':
                        $operationValue %= $number;
                        break;
                    default:
                        return "Invalid Operator.";
                }
            } else {
                return "Invalid Number.";
            }
        }

        return $operationValue;
    }
?>