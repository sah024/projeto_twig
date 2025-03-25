<?php
//carbon_exemplos.php
require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');
use Carbon\Carbon;

//agora
echo Carbon::now()."<br>";

//adiciona dia
echo Carbon::now()->addDay()."<br>";

//subtrair uma semana
echo Carbon::now()->subWeek().'<br>';

//adiciona quetro anos
echo 'Próximas olimpíadas: '.Carbon::createFromDate(2024)->addYears(4)->year.'<br>';

//descobrir idade
echo "Sua idade é: ".Carbon::createFromDate(2007, 9, 24)->age.'<br>';

//se atual é finde
if (Carbon::now()->isWeekend()){
    echo 'festa!';
}else{
    echo 'aula :/';
}

//CALCULAR DIFEREÇA ENTRE DATAS
$nascimento = Carbon::createFromDate(2007, 9, 24);
echo 'diferença de data: '.Carbon::now()->diff($nascimento);
