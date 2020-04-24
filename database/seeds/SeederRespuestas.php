<?php
use App\Respuesta; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederRespuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuesta::truncate(); // Evita duplicar datos
        //futbol
        //Pregunta 1

        $respuestas = new Respuesta();
        $respuestas->id = "1";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Sevilla";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "2";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = " Real Madrid";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "3";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = " Valencia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "4";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Barcelona";
        $respuestas->is_correct = "1";
        $respuestas->save();

        //respuestas 2

        $respuestas = new Respuesta();
        $respuestas->id = "5";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Juan Roman Riquelme";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "6";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Diego Armando Maradona";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "7";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Martin Palermo";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "8";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Carlos Tevez";
        $respuestas->is_correct = "0";
        $respuestas->save();
        //respuestas 3

        $respuestas = new Respuesta();
        $respuestas->id = "9";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "Ronaldinho";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "10";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "Diego Armando Maradona";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "11";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "Pele";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "12";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "Guiseppe Meazza";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 4

        $respuestas = new Respuesta();
        $respuestas->id = "13";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "Alemania";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "14";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "Francia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "15";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "Brasil";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "16";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "Inglaterra";
        $respuestas->is_correct = "1";
        $respuestas->save();
        //basquet
        //respuestas 5

        $respuestas = new Respuesta();
        $respuestas->id = "17";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "40 minutos";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "18";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = " 1 hora";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "19";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = " 20 minutos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "20";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "30 minutos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 6

        $respuestas = new Respuesta();
        $respuestas->id = "21";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "Si";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "22";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "No,es campo atras";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "23";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "Depende";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "24";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "A veces";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 7

        $respuestas = new Respuesta();
        $respuestas->id = "25";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "10 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "26";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "24 segundos";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "27";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "1 minuto";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "28";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "No hay limite";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 8

        $respuestas = new Respuesta();
        $respuestas->id = "29";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "2 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "30";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "10 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "31";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "24 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "32";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "5 segundos";
        $respuestas->is_correct = "1";
        $respuestas->save();
        //tenis
        //respuestas 9

        $respuestas = new Respuesta();
        $respuestas->id = "33";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "6 finales";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "34";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "2 finales";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "35";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "4 finales";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "36";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "ninguna final";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 10

        $respuestas = new Respuesta();
        $respuestas->id = "37";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "cesped";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "38";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "ladrillos";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "39";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "madera";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "40";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "dura";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 11

        $respuestas = new Respuesta();
        $respuestas->id = "41";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Guillermo Cañas y Juan Mónaco";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "42";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Juan Martín del Potro y José Luis Clerc";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "43";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Guillermo Coria y Gastón Gaudio";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "44";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "David Nalbandian y Guillermo Vilas";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 12

        $respuestas = new Respuesta();
        $respuestas->id = "45";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "depende";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "46";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Nose";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "47";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Si estan a la misma altura";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "48";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "No";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //tenis
        //respuestas 13

        $respuestas = new Respuesta();
        $respuestas->id = "49";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Hockey sobre cesped";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "50";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Hockey sobre hielo";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "51";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Todas son correctas";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "52";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Hockey sobre patines";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 14

        $respuestas = new Respuesta();
        $respuestas->id = "53";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Con las piernas flexionadas y la espalda flexionada(pero recta)";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "54";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Con las piernas extendidas y la espalda extendida";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "55";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Con las piernas flexionadas y la espalda extendida";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "56";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Con las piernas extendidas y la espalda flexionada(pero recta)";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 15

        $respuestas = new Respuesta();
        $respuestas->id = "57";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "11 contra 11";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "58";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "7 contra 7";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "59";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "13 contra 13";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "60";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "9 contra 9";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //respuestas 16

        $respuestas = new Respuesta();
        $respuestas->id = "61";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Jugar la bola con el stick a la altura del hombro";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "62";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Lanzar el stick para evitar un gol del equipo rival";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "63";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Tirar a gol desde donde uno quiera";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "64";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "A y B son correctas";
        $respuestas->is_correct = "1";
        $respuestas->save();
    }
}
