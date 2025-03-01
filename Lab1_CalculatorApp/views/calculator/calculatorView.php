<?php
use yii\helpers\Html;

$this->title = 'Calculadora con Yii2';
?>

<div class="flex items-center justify-center min-h-[810px] bg-gradient-to-r from-blue-50 to-purple-100">
    <div class="bg-white p-8 rounded-3xl shadow-2xl w-full max-w-lg">
        <div class="text-center mb-6">
            <p class="bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-4xl font-extrabold text-transparent"><?= Html::encode($this->title) ?></p>
        </div>

        <form method="post" action="" class="space-y-6">
            <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>

            <div>
                <label for="num1" class="block text-xl font-medium text-gray-700 mb-2">Primer número</label>
                <input type="text" class="w-full p-4 border-2 border-indigo-400 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none" id="num1" name="num1" value="<?= Html::encode($num1) ?>" required>
            </div>

            <div>
                <label for="num2" class="block text-xl font-medium text-gray-700 mb-2">Segundo número</label>
                <input type="text" class="w-full p-4 border-2 border-indigo-400 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none" id="num2" name="num2" value="<?= Html::encode($num2) ?>" required>
            </div>

            <div>
                <label for="operator" class="block text-xl font-medium text-gray-700 mb-2">Operación</label>
                <select class="w-full p-4 border-2 border-indigo-400 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none" id="operator" name="operator" required>
                    <option value="addition" <?= $operator === 'addition' ? 'selected' : '' ?>>Suma [+]</option>
                    <option value="subtraction" <?= $operator === 'subtraction' ? 'selected' : '' ?>>Resta [-]</option>
                    <option value="multiplication" <?= $operator === 'multiplication' ? 'selected' : '' ?>>Multiplicación [x]</option>
                    <option value="division" <?= $operator === 'division' ? 'selected' : '' ?>>División [÷]</option>
                </select>
            </div>

            <div class="flex justify-between gap-4 mt-6">
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-xl shadow-lg hover:from-blue-500 hover:to-purple-500 focus:ring-4 focus:ring-blue-200 focus:outline-none transition-all duration-300">Calcular</button>
                <button type="button" class="w-full bg-gray-300 text-gray-800 py-4 px-6 rounded-xl shadow-lg hover:bg-gray-400 focus:ring-4 focus:ring-gray-200 focus:outline-none transition-all duration-300" onclick="window.location.href=window.location.href;">Limpiar</button>
            </div>
        </form>

        <?php if ($errorMessage): ?>
            <div class="mt-6 text-center text-red-500 text-2xl font-semibold p-4 border-2 border-red-500 rounded-xl bg-red-50">
                <?= Html::encode($errorMessage) ?>
            </div>
        <?php endif; ?>

        <?php if ($result !== null): ?>
            <div class="mt-6 text-center text-green-500 p-4 border-2 border-green-500 rounded-xl bg-green-50">
                <h4 class="text-2xl font-semibold">Resultado: <?= Html::encode($result) ?></h4>
            </div>
        <?php endif; ?>
    </div>
</div>
