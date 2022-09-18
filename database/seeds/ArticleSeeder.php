<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Plan de vigilancia, prevención, y control de la COVID-19 en el trabajo',
            'category_id' => 1,
            'autor_id' => 1,
            'text' => '
            <p>
            En marzo de 2020, nuestro país tuvo que afrontar un reto sin precedentes: el ingreso a una cuarentena estricta para hacerle frente a la pandemia generada por el virus del COVID-19.
            </p>
            <p>
            Dicha circunstancia significó una paralización masiva de actividades que también incluyeron las referidas al ámbito académico. En esta coyuntura, y con la idea de activar nuevamente a su respectivo personal a la presencialidad, todas las empresas han iniciado un plan de reactivación y de vigilancia de la salud mediante el cual se pueda asegurar la integridad de todos los trabajadores.
            </p>
            <img src="/alertausil/img/medicina/articulos/Imagen1.jpg" class="img-fluid w-100" alt="COVID19">
            <p>
            Nuestro compromiso es prevenir la propagación del COVID-19, priorizando la salud y bienestar de nuestros colaboradores, alumnos, docentes y personal administrativo, y de esa manera contribuir a la reactivación económica del país
            </p>
            <p>
            Por ello, cumpliendo con la normativa nacional, la Corporación Educativa San Ignacio de Loyola pone a tu disposición su <strong>Plan para la vigilancia, prevención y control del COVID-19</strong>, en el que señalamos los diferentes procedimientos que estamos implementando para que el retorno a tus labores se haga de manera progresiva y responsable, y así poder reactivar todas las áreas paulatinamente.
            </p>
            <p>
            Como ya sabes, algunas áreas se han venido incorporando durante estos últimos días (Gerencia de Administración, Gerencia de TI, Dirección de Imagen.
            </p>
            <p>
            Institucional, USIL TV, Gerencia de E-Learning), así que es importante establecer las instrucciones correspondientes para regresar a las labores presenciales dentro de esta nueva normalidad.
            </p>
            <img src="/alertausil/img/medicina/articulos/Imagen2.jpg" class="img-fluid w-100" alt="COVID19">
            <p>
            A continuación, te presentamos nuestro plan:
            </p>
            <ol>
                <li>
                    Procedimiento de reactivación de personal a la presencialidad.
                </li>
                <li>
                    Limpieza y desinfección de los centros de trabajo.
                </li>
                <li>
                    Evaluación de la condición de salud del trabajador previo al regreso o reincorporación al centro de trabajo.
                </li>
                <li>
                    Programa de sensibilización de la prevención del contagio en el centro de trabajo.
                </li>
                <li>
                    Medidas de protección personal.
                </li>
                <li>
                    Vigilancia de la salud del trabajador en el contexto del Covid-19.
                </li>
                <li>
                    Sanciones de incumplimiento de procedimientos de salud y seguridad.
                </li>
                
            </ol>
            <p>
                Si deseas más información, comunícate con el área de Talento y Cultura donde te asesorarán sobre estas medidas; asimismo, podrás descargar nuestro plan accediendo a <strong>este link</strong>.
            </p>
            <p>
                En USIL seguimos pensando en tu salud y en la de tu familia. Ayúdanos a implementar este plan, ya que, siguiendo estas indicaciones, tu retorno presencial será menos complicado. Trabajando juntos vamos a lograrlo.
            </p>
            ',
        ]);
        Article::create([
            'title' => 'Medidas de higiene y manipulación de alimentos frente al coronavirus',
            'category_id' => 1,
            'autor_id' => 1,
            'text' => '
            <p>
            La higiene y la seguridad alimentaria deben ocupar un lugar importante entre las rutinas de nuestro día a día, sobre todo si vivimos con personas vulnerables a nuestro cargo. Dada la coyuntura que vive el país, se han convertido en un aspecto prioritario para garantizar nuestra seguridad y salud frente a esta nueva ola de contagios.
            </p>
            <p>
            Si bien es cierto no hay evidencias científicas de que el COVID-19 esté presente en los alimentos ni que se reproduzca en ellos, esto no significa que no debamos mantenernos alerta y tomar las medidas de prevención necesarias
            </p>
            <p>
            Las pautas generales para una correcta manipulación de alimentos serán la principal medida que deberán adoptar, especialmente, los familiares y cuidadores de personas mayores durante la preparación de las comidas. Para ellos, recomendamos seguir los 5 paso básicos de seguridad alimentaria:
            </p>
            <p>
            <strong>Separar, limpiar, desinfectar, cocinar y enfriar</strong>
            </p>
            <img src="/alertausil/img/medicina/articulos/articulo2.jpg" class="img-fluid w-100" alt="COVID19">
            <p>
            No obstante, para mayor seguridad, podemos aplicar pautas de protección específicas para evitar la transmisión del virus a los alimentos y utensilios con los que cocinamos.
            </p>
            <!-- <p>
                <strong>Estas son las medidas recomendadas:</strong>
            </p>-->
            
            <p class="d-block">
                1. En el ambiente de la Cocina. <br>
            </p> 
            <ul>
                <li>
                    Ventilar lo más posible los ambientes de la cocina.
                </li>
                <li>
                    Establecer una zona para productos limpios y otra para productos sucios
                </li>
                <li>
                    No usar alcohol o alcohol en gel para desinfectar en la cocina, usar solo agua y jabón porque el alcohol es inflamable.
                </li>
                <li>
                    Colocarse guantes desechables.
                </li>
                <li>
                    Lavar la bolsa de compras o deséchala si es descartable.
                </li>
                <li>
                    Proceder a desinfectar los envases antes de guardar los productos.
                </li>
                <li>
                    Realizar la limpieza de las superficies del entorno con agua y jabón.
                </li>
                <li>
                    Los desinfectantes de uso común (como la lejía) constituyen un procedimiento eficaz y suficiente (OMS).
                </li>
            </ul>
            <p>
                2.	Durante la preparación de los alimentos
            </p>
            <ul>
                <li>
                    Limpiar y desinfectar nuestra cocina antes y después de cocinar
                </li>
                <li>
                    Manipular los alimentos crudos y procesados de manera separada. Evitar el uso de la misma superficie; por ejemplo: diferenciar las tablas de picar.
                </li>
                <li>
                    Limpieza de superficies: retirar primero los restos de suciedad, comida y grasa; después, con agua templada, usar un limpiador y frotar, no retirarlo inmediatamente sino dejarlo uno o dos minutos, lavar con agua templado y, por último, secar la superficie.
                </li>
                <li>
                    Lavar continuamente los paños o toallas que utilizamos para la limpieza de superficies y manos, si son desechables descartarlos inmediatamente.
                </li>
                <li>
                    Realizar también la desinfección de recipientes, electrodomésticos y utensilios antes y después de cocinar.
                </li>
                <li>
                    Separar y eliminar toda la basura diariamente.
                </li>
            </ul>
            <p class="h5 font-alerta color-usil">
                Debemos estar siempre atentos a todas estas recomendaciones. Todos somos Alerta USIL. Una señal a tiempo te puede salvar la vida.
            </p>
            ',
        ]);
    }
}
