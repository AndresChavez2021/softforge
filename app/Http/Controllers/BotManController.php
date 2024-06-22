<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    /*public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            } else {
                $botman->reply("write 'hi' for testing...");
            }
        });

        $botman->listen();
    }*/

    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            switch ($message):
                case "¿Cúal es la Vision de la empresa?":
                    $botman->reply("La visiòn de la empresa es la siguiente: " . "<br>" .
                        "Ser la empresa de desarrollo de software líder en el mercado,
                proporcionando soluciones innovadoras y de alta calidad que ayuden a
                nuestros clientes a alcanzar sus objetivos." . "<br>" .
                        "Para mas informaciòn accede al siguiente link: " . '"<a href="{{url("/about")}}">Acerca de</a>"');
                    break;
                case "¿Cúal es la Mision de la empresa?":
                    $botman->reply("La misiòn de la empresa es la siguiente: " . "<br>" .
                        "En “SoftForge Innovations”, nuestra misión es impulsar la excelencia en el desarrollo de software, comprometiéndonos a proporcionar soluciones innovadoras y de alta calidad que superen las expectativas de nuestros clientes.

" . "<br>" .
                        "Para mas informaciòn accede al siguiente link: " . '"<a href="{{url("/about")}}">Acerca de</a>"');
                    break;
                case "¿Qué Servicios ofrece la empresa?":
                    $botman->reply("SOFTFORGE INNOVATIONS ofrece los siguientes servicios: " . "<br>" .
                        "- Desarrollo de software a medida" . "<br>" .
                        "- Desarrollo de software de código abierto" . "<br>" .
                        "- Integración de sistemas" . "<br>" .
                        "- Soporte y mantenimiento de software" . "<br>" .
                        "- Consultoría de software" . "<br>" .
                        "- Desarrollo de prototipos de software");
                    break;
                case "¿Con quien me puedo contactar para una consulta?":
                    $botman->reply("Sigue el siguiente enlace: " . '"<a href="{{url("/contact")}}">Contacto</a>"');
                    break;
                default:
                    $botman->reply("Preguntas frecuentes:" . "<br>" . "¿Cúal es la Mision de la empresa?" .
                        "<br>" . "¿Cúal es la Vision de la empresa?" .
                        "<br>" . "¿Qué Servicios ofrece la empresa?" .
                        "<br>" . "¿Con quien me puedo contactar para una consulta?");
            endswitch;
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}
