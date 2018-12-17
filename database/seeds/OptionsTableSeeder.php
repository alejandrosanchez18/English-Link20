<?php

use Illuminate\Database\Seeder;
use App\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $option = new Option();
         $option->slug = 'viajero';
         $option->title = 'Ingles para Viajeros';
         $option->info = 'En el aeropuerto, en un restaurante, de compras o en un hotel son muchas las situaciones comunicativas a las que se enfrenta un turista cuando el destino elegido implica expresarse en inglés, en English Link te ofrecemos diversas opciones que se adaptan a tus necesidades para aprender inglés de forma rápida, sencilla y con contenido adaptado a contextos de viaje.';
         $option->save();
         $option = new Option();
         $option->slug = 'exam';
         $option->title = 'Preparacion examenes internacionales';
         $option->info = 'Ofrecemos cursos de preparación para exámenes internacionales. Estos cursos se
enfocan en el contenido del examen y en las estrategias necesarias para realizar el
examen de manera eficiente, y así poder obtener el resultado esperado.<ul><li>Trinity</li>
<li>Cambridge</li>
<li>TOEFL</li>
<li>Anglia</li>
<li>TOEIC</li>
<li>IELTS</li></ul>';
         $option->save();
         $option = new Option();
         $option->slug = 'company';
         $option->title = 'Capacitación In-Company';
         $option->info = 'English Link dispone de una capacitación en el idioma inglés para empresas,
corporaciones y/o profesionales, enfocada para desarrollar/perfeccionar
competencias clave que permitan satisfacer las necesidades específicas y cumplir los
objetivos particulares de los mismos.';
         $option->save();
         $option = new Option();
         $option->slug = 'conversacion';
         $option->title = 'Cursos de Conversación (Intermediate/Advanced)';
         $option->info = 'Este curso está orientado a todas aquellas personas que deseen mejorar su fluidez en
el habla y su pronunciación; así también como ganar más confianza y control a la hora
de escuchar y hablar en inglés.';
         $option->save();
         $option = new Option();
         $option->slug = 'general';
         $option->title = 'Ingles General';
         $option->info = '<h1>Niveles</h1><ul><li> Elementary (A1)</li>
<li> Pre intermediate (A2)</li>
<li> Intermediate (B1)</li>
<li>Upper intermediate (B2)</li>
<li>Advanced (C1)</li>
<li>Proficiency (C2)</li>';
         $option->save();
         $option = new Option();
         $option->slug = 'kids';
         $option->title = '<spam style="font-weight:bold;">EnglishLink Kids<spam>';
         $option->info = 'Creado con el objetivo de acercar una enseñanza única del idioma Inglés a los niños,
English Link KIDS asegura una formación completa incorporando a la enseñanza diaria <spam style="font-weight:bold;">la
diversión como una estrategia de aprendizaje.</spam><br><br>
Además de promover las habilidades de comunicación en Inglés de forma dinámica,
English Link KIDS prioriza la estimulación del pensamiento lógico y creativo, así como
también la formación de valores que permitan vencer las inhibiciones y bloqueos que
puedan ocurrir durante el aprendizaje.';
         $option->save();
    }
}
