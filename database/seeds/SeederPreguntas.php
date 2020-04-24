<?php
use App\Pregunta; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederPreguntas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::truncate(); // Evita duplicar datos

        //preguntas de futbol

        $preguntas = new Pregunta();
        $preguntas->id = "1";
        $preguntas->detalle = "¿En qué equipo de Fútbol juega Leo Messi?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "2";
        $preguntas->detalle = "¿Quien es el maximo goleador de la historia de Boca Juniors?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "3";
        $preguntas->detalle = "¿Qué jugador de fútbol ha ganado más copas del mundo?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "4";
        $preguntas->detalle = "¿En qué país se inventó el fútbol?";
        $preguntas->categoria_id = "1";
        $preguntas->save();

        //preguntas de basquet

        $preguntas = new Pregunta();
        $preguntas->id = "5";
        $preguntas->detalle = "¿Cuánto dura un partido de baloncesto?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "6";
        $preguntas->detalle = "¿Puede un jugador pasar el balón a su propio campo despues de haber superado el medio campo?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "7";
        $preguntas->detalle = "¿Cuanto tiempo de posesion tiene cada equipo para conseguir encestar ?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "8";
        $preguntas->detalle = "¿Cuanto tiempo puede estar un jugador con el balón en las manos sin jugarlo o botarlo?";
        $preguntas->categoria_id = "2";
        $preguntas->save();

        //preguntas de tenis

        $preguntas = new Pregunta();
        $preguntas->id = "9";
        $preguntas->detalle = "¿Cuántas finales de la Davis disputó Argentina?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "10";
        $preguntas->detalle = "¿Sobre qué superficie se juega Roland Garros?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "11";
        $preguntas->detalle = "¿Qué tenistas argentinos protagonizaron una recordada final de Roland Garros?";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "12";
        $preguntas->detalle = " ¿En los dobles de tenis la red está a la misma altura que en los singles? ";
        $preguntas->categoria_id = "3";
        $preguntas->save();

        //preguntas de hockey

        $preguntas = new Pregunta();
        $preguntas->id = "13";
        $preguntas->detalle = "¿Cuales de los siguientes tipos de hockey existen?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "14";
        $preguntas->detalle = "¿Como debe ser la postura correcta durante el juego?";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "15";
        $preguntas->detalle = "En el hockey sobre cesped se juegan..";
        $preguntas->categoria_id = "4";
        $preguntas->save();

        $preguntas = new Pregunta();
        $preguntas->id = "16";
        $preguntas->detalle = " ¿Cual de las siguientes acciones no se puede realizar? ";
        $preguntas->categoria_id = "4";
        $preguntas->save();
    }

}
