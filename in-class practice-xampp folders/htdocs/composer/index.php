<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './vendor/autoload.php';

        use Carbon\Carbon;
        // Carbon embed 822 languages

        printf("Right now is %s<br>", Carbon::now()->toDateTimeString());
        printf("Right now in Montreal is %s<br>", Carbon::now('America/Montreal'));
        
        $tomorrow = Carbon::now()->addDay();
        $lastWeek = Carbon::now()->subWeek();
        
        echo $tomorrow->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm');
        echo '<br>';
        echo $tomorrow->locale('zh')->isoFormat('dddd, MMMM Do YYYY, h:mm');
        echo '<br>';
        
        $officialDate = Carbon::now()->toRfc2822String();
        echo $officialDate . '<br>';
        
        $howOldAmI = Carbon::createFromDate(1986, 10, 31)->age;
        echo $howOldAmI . '<br>';
        
        $noonTodayLondonTime = Carbon::createFromTime(20, 0, 0, 'Europe/London'); // 20:00:00 current day
        $noonTodayLondonTime1 = Carbon::createFromTime(24, 0, 0, 'Europe/London'); // 00:00:00 the next day
        echo $noonTodayLondonTime . '<br>';
        
        $nameAFutureDate = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT'); //2038-01-19 03:14:07
        echo $nameAFutureDate . '<br>';
        
        if (Carbon::now()->isWeekend()) {
            echo 'Party!' . '<br>';
        }
        
        echo Carbon::now()->subMinutes(2)->diffForHumans() . "<br>"; // '2 minutes ago'
        echo Carbon::tomorrow()->diffForHumans() . "<br>";
        echo Carbon::tomorrow()->diffForHumans(['parts' => 2]) . "<br>";
        echo Carbon::tomorrow()->diffForHumans(['parts' => 3, 'join' => true]) . "<br>";
        echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday()) . "<br>";
        echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday(), ['short' => true]) . "<br>";
        /*
        22 hours from now
        22 hours 8 minutes from now
        22 hours, 8 minutes and 19 seconds from now
        2 days after
        2d after
         */



        
        ?>
    </body>
</html>
