<?php
// definicje klas

class komputer{
    var $cena;
    
    
}

class procesor{
    var $firma;
    var $model;
    var $rdzenie;
    var $taktowanie;
    
    function wykonywanie_obliczen(){
        
    }
}

class karta_graficzna{
    var $firma;
    var $model;
    var $taktowanie;
    var $pamiec;
    
    function tworzenie_obrazu(){
        
    }
}

class pamiec_ram{
    var $firma;
    var $model;
    var $ilosc;
    var $typ;
}

//definicje obiektów

//************Komputer1************\\
$komputer1=new komputer();
$procesor1=new procesor();
$karta_graficzna1=new karta_graficzna();
$pamiec_ram=new pamiec_ram();
//************Komputer1************\\

//ustawienie zmiennnych klasy

$komputer1->cena=3000;

$procesor1->firma='intel';
$procesor1->model='i5';
$procesor1->rdzenie=8;
$procesor1->taktowanie='3,5GHz';

$karta_graficzna1->firma=;
$karta_graficzna1->model=;
$karta_graficzna1->taktowanie=;
$karta_graficzna1->pamiec=;