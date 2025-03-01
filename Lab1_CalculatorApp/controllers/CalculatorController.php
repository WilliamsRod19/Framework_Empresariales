<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class CalculatorController extends Controller
{
    public function actionCalculator()
    {
        $result = null;
        $num1 = null;
        $num2 = null;
        $operator = null;
        $errorMessage = null;
        
        if (Yii::$app->request->isPost) {
            $num1 = Yii::$app->request->post('num1');
            $num2 = Yii::$app->request->post('num2');
            $operator = Yii::$app->request->post('operator');
            
            if (!is_numeric($num1) || !is_numeric($num2)) {
                $errorMessage = 'Los valores deben ser numéricos';
            } else {
                if($operator == 'addition') {
                    $result = $num1 + $num2;
                } elseif($operator == 'subtraction') {
                    $result = $num1 - $num2;
                } elseif($operator == 'multiplication') {
                    $result = $num1 * $num2;
                } elseif($operator == 'division') {
                    if ($num2 == 0) {
                        $errorMessage = 'No se puede dividir por cero';
                    } else {
                        $result = $num1 / $num2;
                    }
                }

            }
        }
        
        return $this->render('calculatorView', [
            'result' => $result,
            'num1' => $num1,
            'num2' => $num2,
            'operator' => $operator,
            'errorMessage' => $errorMessage
        ]);
    }    
}