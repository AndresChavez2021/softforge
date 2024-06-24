<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        // Start with a greeting and show the menu
        $botman->hears('hi', function ($botman) {
            $this->showMenu($botman);
        });

        // Handle other messages
        $botman->hears('{message}', function ($botman, $message) {
            $this->processMessage($botman, $message);
        });

        $botman->listen();
    }

    /**
     * Show the main menu with options.
     */
    public function showMenu($botman)
    {
        $botman->reply("¡Hola! Soy el chatbot de SOFTFORGE INNOVATIONS. ¿En qué puedo ayudarte hoy?");
        $botman->reply("Estas son algunas de las cosas con las que puedo ayudarte:");
        $botman->reply("1. Visión de la empresa" . "<br>" .
            "2. Misión de la empresa" . "<br>" .
            "3. Servicios ofrecidos" . "<br>" .
            "4. Contacto para consulta" . "<br>" .
            "5. Preguntas frecuentes" . "<br>" .
            "6. Proceso de Desarrollo y Proyectos" . "<br>" .
            "7. Costos y Presupuesto" . "<br>" .
            "8. Capacitación y Documentación" . "<br>" .
            "9. Políticas y Garantías" . "<br>");
    }
    public function showMenuBasic($botman)
    {
        $botman->reply(
            "1. Visión de la empresa" . "<br>" .
                "2. Misión de la empresa" . "<br>" .
                "3. Servicios ofrecidos" . "<br>" .
                "4. Contacto para consulta" . "<br>" .
                "5. Preguntas frecuentes" . "<br>" .
                "6. Proceso de Desarrollo y Proyectos" . "<br>" .
                "7. Costos y Presupuesto" . "<br>" .
                "8. Capacitación y Documentación" . "<br>" .
                "9. Políticas y Garantías" . "<br>"
        );
    }
    public function replyFAQ($botman)
    {
        $botman->reply("Preguntas frecuentes:" . "<br>" .

            "<br>" . "10. ¿Qué tecnologías utilizan para el desarrollo de software?" .
            "<br>" . "11. ¿Puedo ver una demo de algún proyecto?" .
            "<br>" . "12. ¿Ofrecen formación para el uso de las aplicaciones desarrolladas?" .
            "<br>" . "13. ¿Pueden adaptar software existente a nuevas necesidades?");
    }

    public function replyProceso($botman)
    {
        $botman->reply(
            "Proceso de Desarrollo y Proyectos:" . "<br>" .

                "<br>" . "14 . ¿Cuál es su proceso de desarrollo de software?" .
                "<br>" . "15 . ¿Cuánto tiempo lleva desarrollar un proyecto típico?"

        );
    }
    public function replyCosto($botman)
    {
        $botman->reply(
            "Costos y Presupuesto:" . "<br>" .

                "<br>" . "16 . ¿Cuál es su modelo de precios?" .
                "<br>" . "17 . ¿Ofrecen presupuestos personalizados según los requisitos del proyecto?"

        );
    }
    public function replyCapacitacion($botman)
    {
        $botman->reply(
            "Capacitación y Documentación:" . "<br>" .

                "<br>" . "18 . ¿Ofrecen capacitación para los usuarios finales?" .
                "<br>" . "19 . ¿Proporcionan documentación detallada y manuales de usuario?"

        );
    }
    public function replyPolitica($botman)
    {
        $botman->reply(
            "Políticas y Garantías" . "<br>" .

                "<br>" . "20 . ¿Cuáles son sus políticas de cancelación y reembolso?" .
                "<br>" . "21 . ¿Ofrecen alguna garantía sobre la calidad del software desarrollado?"

        );
    }

    /**
     * Process the incoming message and provide appropriate responses.
     */
    public function processMessage($botman, $message)
    {
        $message = strtolower($message);

        switch ($message) {
            case 'menu':
                $this->showMenuBasic($botman);
                break;
            case 'visión de la empresa':
            case '1':
                $this->replyVision($botman);
                break;
            case 'misión de la empresa':
            case '2':
                $this->replyMission($botman);
                break;
            case 'servicios ofrecidos':
            case '3':
                $this->replyServices($botman);
                break;
            case 'contacto para consulta':
            case '4':
                $this->replyContact($botman);
                break;
            case 'preguntas frecuentes':
            case '5':
            case 'faq':
                $this->replyFAQ($botman);
                break;
            case 'proceso de desarrollo y proyectos':
            case 'proceso de desarrollo':
            case '6':
                $this->replyProceso($botman);
                break;
            case 'costos y presupuesto':
            case '7':
                $this->replyCosto($botman);
                break;
            case 'capacitación y documentacion':
            case '8':
                $this->replyCapacitacion($botman);
                break;
            case 'políticas y garantías':
            case '9':
                $this->replyPolitica($botman);
                break;
            case 'qué tecnologías utilizan para el desarrollo de software':
            case 'que tecnologias usan':
            case '10':
                $this->replyTecnology($botman);
                break;
            case 'puedo ver una demo de algún proyecto':
            case '11':
                $this->replyDemoRequest($botman);
                break;
            case 'ofrecen formación para el uso de las aplicaciones desarrolladas':
            case '12':
                $this->replyTraining($botman);
                break;
            case 'pueden adaptar software existente a nuevas necesidades':
            case '13':
                $this->replyAdaptation($botman);
                break;
            case 'cuál es su proceso de desarrollo de software':
            case '14':
                $this->replyDevelopmentProcess($botman);
                break;
            case 'cuánto tiempo lleva desarrollar un proyecto típico':
            case '15':
                $this->replyProjectDuration($botman);
                break;

            case 'cual es su modelo de precios':
            case '16':
                $this->replyPricingModel($botman);
                break;
            case 'ofrecen presupuestos personalizados según los requisitos del proyecto':
            case 'ofrecen presupuestos personalizados':
            case '17':
                $this->replyCustomQuotes($botman);
                break;

            case 'ofrecen capacitación para los usuarios finales':
            case '18':
                $this->replyTrainingForUsers($botman);
                break;
            case 'proporcionan documentación detallada y manuales de usuario':
            case '19':
                $this->replyUserDocumentation($botman);
                break;
            case 'cuáles son sus políticas de cancelación y reembolso':
            case '20':
                $this->replyCancellationRefundPolicy($botman);
                break;
            case 'ofrecen alguna garantía sobre la calidad del software desarrollado':
            case '21':
                $this->replyQualityAssurance($botman);
                break;



            default:
                $botman->reply("No entendí tu mensaje. Por favor, elige una opción del menú.");
                break;
        }
    }
    /**
     * Reply regarding quality assurance for developed software.
     */
    public function replyQualityAssurance($botman)
    {
        $botman->reply("En SOFTFORGE INNOVATIONS, nos comprometemos a ofrecer software de alta calidad que cumpla con las expectativas de nuestros clientes.");

        // Explain quality assurance practices
        $botman->reply("Nuestro proceso de desarrollo incluye rigurosas pruebas de calidad en todas las etapas:");

        $botman->reply("- Pruebas unitarias durante el desarrollo para asegurar el funcionamiento correcto de cada componente.");
        $botman->reply("- Pruebas de integración para verificar la interoperabilidad entre módulos y sistemas.");
        $botman->reply("- Pruebas de aceptación con participación del cliente para validar que el software cumple con los requisitos acordados.");

        // Mention commitment to customer satisfaction
        $botman->reply("Además, ofrecemos soporte post-lanzamiento para corregir cualquier problema y asegurar la satisfacción del cliente.");

        // Provide assurance of continuous improvement
        $botman->reply("Estamos comprometidos con la mejora continua de nuestros procesos y la implementación de las mejores prácticas de la industria para garantizar la calidad de nuestros productos.");

        // Optionally, provide contact information for further inquiries
        $botman->reply("Para más detalles sobre nuestras prácticas de calidad, no dudes en contactar a nuestro equipo de soporte.");

        // Optionally, provide a link to detailed quality assurance practices if available online
        // $botman->reply("Para más detalles, puedes revisar nuestras prácticas completas de aseguramiento de calidad en nuestro sitio web: [Enlace a prácticas]");

    }

    /**
     * Reply regarding cancellation and refund policies.
     */
    public function replyCancellationRefundPolicy($botman)
    {
        $botman->reply("Nuestras políticas de cancelación y reembolso están diseñadas para cumplir con las regulaciones locales en Bolivia y garantizar una relación justa con nuestros clientes.");

        // Explain general policy details
        $botman->reply("Para cancelar un servicio contratado, los clientes deben notificarlo por escrito con al menos 30 días de antelación.");

        // Include details about refunds
        $botman->reply("Los reembolsos se manejan de la siguiente manera:");
        $botman->reply("- Si la cancelación se realiza dentro de los primeros 7 días de contratación, se ofrece un reembolso completo.");
        $botman->reply("- Después de los primeros 7 días, se aplicará una penalización del 20% del monto total del contrato.");

        // Provide information on how to initiate a cancellation or refund request
        $botman->reply("Para más detalles sobre cómo proceder con una cancelación o solicitud de reembolso, te recomendamos contactar a nuestro equipo de soporte.");

        // Optionally, provide contact information or a link to more detailed policies
        $botman->reply("Puedes contactar a nuestro equipo de soporte a través de nuestro portal en línea o enviando un correo electrónico a support@softforge.com.bo");

        // Optionally, provide a link to detailed cancellation and refund policies if available online
        // $botman->reply("Para más detalles, puedes revisar nuestras políticas completas de cancelación y reembolso en nuestro sitio web: [Enlace a políticas]");
    }

    /**
     * Reply regarding detailed documentation and user manuals.
     */
    public function replyUserDocumentation($botman)
    {
        $botman->reply("Sí, proporcionamos documentación detallada y manuales de usuario para todos nuestros productos y soluciones.");

        // Optionally, you can provide more details about the documentation provided
        $botman->reply("Nuestros manuales de usuario incluyen instrucciones paso a paso, capturas de pantalla y ejemplos prácticos para facilitar el aprendizaje y la referencia. Además, ofrecemos documentación técnica completa para desarrolladores y administradores.");

        // You can also guide the user on how to access or request specific documentation
        $botman->reply("Si necesitas acceder a nuestros manuales de usuario o documentación técnica, puedes encontrarlos en nuestra plataforma en línea o contactarnos para recibir la información específica que necesitas.");

        // Optionally, you can provide a link to an online documentation portal
        $botman->reply("Para más detalles, puedes visitar nuestro portal de documentación en línea: [Enlace al portal de documentación]");
    }

    /**
     * Reply regarding training for end-users of developed software.
     */
    public function replyTrainingForUsers($botman)
    {
        $botman->reply("Sí, ofrecemos capacitación para los usuarios finales del software desarrollado.");

        // Optionally, you can provide more details about the training programs offered
        $botman->reply("Nuestros programas de capacitación están diseñados para asegurar que los usuarios finales puedan aprovechar al máximo las funcionalidades del software. Ofrecemos sesiones presenciales y en línea, manuales de usuario detallados y soporte continuo para garantizar una transición sin problemas y una adopción efectiva del software.");

        // You can also guide the user on how to request or schedule training sessions
        $botman->reply("Si deseas más información sobre nuestras capacitaciones o quieres programar una sesión, por favor contáctanos y con gusto te ayudaremos.");
    }

    /**
     * 
     * Reply regarding custom quotes for project requirements.
     */
    public function replyCustomQuotes($botman)
    {
        $botman->reply("Sí, ofrecemos presupuestos personalizados según los requisitos específicos de cada proyecto.");

        // Optionally, you can provide more details about how to obtain a custom quote
        $botman->reply("Para obtener un presupuesto personalizado, te invitamos a contactar a nuestro equipo de ventas. Puedes enviar un mensaje a través de nuestro formulario en línea o contactarnos directamente por correo electrónico o teléfono. Estaremos encantados de discutir tus necesidades y proporcionarte una propuesta adaptada a tus requerimientos.");
    }

    /**
     * Reply with information about the pricing model.
     */
    public function replyPricingModel($botman)
    {
        $botman->reply("Ofrecemos tres planes de precios para adaptarnos a las necesidades de nuestros clientes:");

        // Basic Plan details
        $botman->reply("PLAN BÁSICO - $99.9 / mes" . "<br>" .
            "- Usuarios: Hasta 10 usuarios" . "<br>" .
            "- Acceso a funcionalidades básicas del software." . "<br>" .
            "- Almacenamiento: 20 GB" . "<br>" .
            "- Soporte por correo electrónico durante horario laboral." . "<br>" .
            "- Respuesta dentro de 48 horas.");

        // Standard Plan details
        $botman->reply("PLAN ESTÁNDAR - $259 / mes" . "<br>" .
            "- Usuarios: Hasta 50 usuarios" . "<br>" .
            "- Acceso a funcionalidades avanzadas del software." . "<br>" .
            "- Almacenamiento: 100 GB" . "<br>" .
            "- Soporte por correo electrónico y chat en vivo durante horario laboral." . "<br>" .
            "- Respuesta dentro de 24 horas." . "<br>" .
            "- Descuentos en servicios de consultoría.");

        // Premium Plan details
        $botman->reply("PLAN PREMIUM - $599 / mes" . "<br>" .
            "- Usuarios: Ilimitado" . "<br>" .
            "- Acceso a todas las funcionalidades del software." . "<br>" .
            "- Almacenamiento: 500 GB" . "<br>" .
            "- Soporte 24/7 por correo electrónico, chat en vivo y teléfono." . "<br>" .
            "- Respuesta dentro de 4 horas." . "<br>" .
            "- Formación personalizada y talleres en vivo." . "<br>" .
            "- Prioridad en el desarrollo de nuevas funcionalidades solicitadas.");
    }


    /**
     * Reply with information about the typical duration of a software project.
     */
    public function replyProjectDuration($botman)
    {
        $botman->reply("La duración de un proyecto típico de desarrollo de software puede variar según varios factores, como la complejidad del proyecto, los requisitos específicos del cliente y el tamaño del equipo de desarrollo.");

        $botman->reply("En general, un proyecto puede llevar desde varias semanas hasta varios meses, dependiendo de los siguientes aspectos:" . "<br>" .
            "- Para proyectos pequeños o simples, el tiempo puede ser de algunas semanas." . "<br>" .
            "- Proyectos medianos pueden tomar de uno a tres meses." . "<br>" .
            "- Proyectos grandes y complejos pueden extenderse de tres a seis meses o más.");

        $botman->reply("Es importante destacar que cada proyecto es único y el tiempo exacto de desarrollo se determina después de un análisis detallado de los requisitos y la planificación del proyecto.");

        // Optionally, you can provide more details or direct the user to contact for specific project timelines.
        $botman->reply("Si deseas obtener una estimación más precisa para tu proyecto específico, te invitamos a contactarnos para discutir los detalles y poder proporcionarte una respuesta más detallada.");
    }



    /**
     * Reply with information about the software development process and how changes in requirements are handled.
     */
    public function replyDevelopmentProcess($botman)
    {
        $botman->reply("Nuestro proceso de desarrollo de software sigue las siguientes etapas:" . "<br>" .
            "- Reunión inicial y análisis de requisitos." . "<br>" .
            "- Diseño y planificación del proyecto." . "<br>" .
            "- Desarrollo e implementación del software." . "<br>" .
            "- Pruebas y revisión de calidad." . "<br>" .
            "- Entrega y puesta en producción." . "<br>" .
            "- Soporte post-lanzamiento y mantenimiento." . "<br>" .
            "Este proceso asegura que cumplimos con los requisitos del cliente y entregamos soluciones de alta calidad.");

        $botman->reply("Para manejar los cambios en los requisitos durante el desarrollo, seguimos un proceso flexible:" . "<br>" .
            "- Evaluación del impacto de los cambios en el alcance, el cronograma y el presupuesto del proyecto." . "<br>" .
            "- Comunicación continua con el cliente para entender sus necesidades y ajustar las prioridades según sea necesario." . "<br>" .
            "- Implementación de los cambios con el consentimiento y la aprobación del cliente para asegurar la satisfacción del mismo.");

        // Optionally, you can provide more details about handling requirement changes
        $botman->reply("Este enfoque nos permite adaptarnos rápidamente a nuevas necesidades y mantener la transparencia y la colaboración con nuestros clientes a lo largo de todo el proyecto.");
    }

    /**
     * Reply with information about adapting existing software to new needs.
     */
    public function replyAdaptation($botman)
    {
        $botman->reply('Sí, en SOFTFORGE INNOVATIONS podemos adaptar software existente para cumplir con nuevas necesidades específicas de tu empresa o proyecto.' .
            'Para obtener más información sobre cómo podemos ayudarte con la adaptación de software, te sugerimos que contactes directamente a nuestro equipo de soporte a través del siguiente enlace de WhatsApp: ' .
            '<a href="https://api.whatsapp.com/send?phone=+59163489070&text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20la%20adaptación%20de%20software%20existente." target="_blank">Contactar por WhatsApp</a>.');
    }

    /**
     * Reply with the company's vision.
     */
    public function replyVision($botman)
    {
        $botman->reply("La visión de la empresa es la siguiente: " . "<br>" .
            "Ser la empresa de desarrollo de software líder en el mercado, proporcionando soluciones innovadoras y de alta calidad que ayuden a nuestros clientes a alcanzar sus objetivos." . "<br>" .
            "Para más información accede al siguiente link: ");
    }

    /**
     * Reply with the company's mission.
     */
    public function replyMission($botman)
    {
        $botman->reply("La misión de la empresa es la siguiente: " . "<br>" .
            "En “SoftForge Innovations”, nuestra misión es impulsar la excelencia en el desarrollo de software, comprometiéndonos a proporcionar soluciones innovadoras y de alta calidad que superen las expectativas de nuestros clientes." . "<br>" .
            "Para más información accede al siguiente link: ");
    }

    /**
     * Reply with the services offered by the company.
     */
    public function replyServices($botman)
    {
        $botman->reply("SOFTFORGE INNOVATIONS ofrece los siguientes servicios: " . "<br>" .
            "- Desarrollo de software a medida" . "<br>" .
            "- Desarrollo de software de código abierto" . "<br>" .
            "- Integración de sistemas" . "<br>" .
            "- Soporte y mantenimiento de software" . "<br>" .
            "- Consultoría de software" . "<br>" .
            "- Desarrollo de prototipos de software");
    }

    /**
     * Reply with contact information.
     */
    public function replyContact($botman)
    {
        $botman->reply('Puedes contactar a nuestro equipo de soporte a través del siguiente enlace de WhatsApp: ' .
            '<a href="https://api.whatsapp.com/send?phone=+59163489070&text=hola," target="_blank">Contactar por WhatsApp</a>');
    }


    public function replyTecnology($botman)
    {
        $technologies = [
            'PHP',
            'Java',
            'JavaScript',
            'Python',
            'C#',
            'C++'
        ];

        $formattedTechnologies = implode(', ', $technologies);

        $botman->reply('Las tecnologías que utilizamos mayormente son: ' . $formattedTechnologies);
    }
    /**
     * Reply with frequently asked questions.
     */


    /**
     * Reply with a message to contact for a project demo.
     */
    public function replyDemoRequest($botman)
    {
        $botman->reply('Para ver una demostración de nuestros proyectos, por favor contacta a nuestro equipo de soporte a través del siguiente enlace de WhatsApp: ' .
            '<a href="https://api.whatsapp.com/send?phone=+59163489070&text=Hola,%20me%20gustaría%20ver%20una%20demostración%20de%20proyectos." target="_blank">Contactar por WhatsApp</a>.');
    }
    /**
     * Reply with information about training for using developed applications.
     */
    public function replyTraining($botman)
    {
        $botman->reply('Sí, ofrecemos formación para el uso de las aplicaciones desarrolladas. Nuestro equipo de soporte puede proporcionar capacitaciones personalizadas según las necesidades de tu empresa o proyecto. ' .
            'Para más detalles y coordinar una sesión de formación, te recomendamos contactar directamente a nuestro equipo a través del siguiente enlace de WhatsApp: ' .
            '<a href="https://api.whatsapp.com/send?phone=+59163489070&text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20la%20formación%20en%20aplicaciones%20desarrolladas." target="_blank">Contactar por WhatsApp</a>.');
    }
}
