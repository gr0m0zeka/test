<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\MgidService;
use App\Adspend;
use App\Staging;

class AdspendAutoController extends Controller
{
    public function add($campId)
    {
        $newAdspend = new MgidService();
        $fundsEarned = $newAdspend->getDailyStat($campId);
        $time = date('h:m');
        $interval = "";

        //в промежуточной таблице Staging будет по 1 записи для 1 компании которые мы будем перезаписывать
        //получаем из таблицы Staging запись (поле money) и записываем в $money
        //$fundsEarned = $fundsEarned - $money; Получаем разницу
        //или через explode получаем минуты из $time, или date('m');
        //делаем проверку if(0 < $m <= 15){}elseif(15 < $m <= 30){} ...
        //в зависимости от проверки собираем наш интервал в переменную $interval и обновляем записи в таблиц Staging и добавляем новую/обновляем существующую запись в Adspend

        Adspend::create([
            'combination_id' => $campId,
            'date' => now(),
            '15_minute_interval' => $interval,
            'amount_of_expenses' => $fundsEarned,
        ]);
    }
}