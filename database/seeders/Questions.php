<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Questions extends Seeder
{
    /**
     * Run the database seeds:
     *
     * @return void
     */
    public function run()
    {	
    	$date = Carbon::now();

		DB::table('test_questions')->insert([
			[ 
				'questions_id' => '01',
				'name' => 'Entiendo perfectamente las instrucciones de esta prueba:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '02',
				'name' => 'Estoy dispuesto a contestar cada pregunta tan sinceramente como me sea posible:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '03',
				'name' => 'Preferiría tener una casa:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '04',
				'name' => 'Puedo encontrar energía suficiente para enfrentarme a mis dificultades:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '05',
				'name' => 'Los animales salvajes me ponen un poco nervioso aun cuando se encuentren en fuertes jaulas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '06',
				'name' => 'Evito criticar a la gente y a sus ideas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '07',
				'name' => 'Hago observaciones agudas y sarcásticas a la gente que creo que se las merece:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '08',
				'name' => 'Prefiero la música semi-clásica a las tonadas populares:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '09',
				'name' => 'Si viera peleando a dos niños de mi vecino:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '010',
				'name' => 'En los eventos sociales:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '011',
				'name' => 'Sería más interesante ser:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '012',
				'name' => 'Prefiero detenerme en la calle para observar a un artista pintando, que a ponerme a escuchar una pelea entre  varias personas:  ',
				'created_at' => $date
			],
			[ 
				'questions_id' => '013',
				'name' => 'Generalmente puedo tolerar a la gente vanidosa aún cuando se jacten o se muestren muy engreídas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '014',
				'name' => 'Cuando un hombre no es honrado casi siempre se le nota en la cara:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '015',
				'name' => 'Sería muy bueno que las vacaciones fueran más largas y que todos tuviesen que tomarlas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '016',
				'name' => 'Prefiero arriesgarme en un empleo donde las ganancias sean grandes aunque variables, y no en uno con salario fijo y pequeño:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '017',
				'name' => 'Hablo de mis sentimientos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '018',
				'name' => 'En ocasiones tengo un vago sentimiento de peligro o un repen­tino temor, por razones que no entiendo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '019',
				'name' => 'Cuando se me critica equivocadamente por algo que yo NO hice:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '020',
				'name' => 'El dinero puede comprar casi todo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '021',
				'name' => 'Mis decisiones están guiadas principalmente por:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '022',
				'name' => 'La mayoría de la gente sería más feliz si viviera más ligada a sus semejantes e hiciera las mismas cosas que ellos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '023',
				'name' => 'Cuando me miro en el espejo, algunas veces confundo cual es mi derecha y cual es mi izquierda:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '024',
				'name' => 'Cuando estoy conversando me gusta:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '025',
				'name' => 'Cuando algo me pone realmente furioso me doy cuenta que me calmo rápidamente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '026',
				'name' => 'Con las mismas horas de trabajo e idéntica paga preferiría la vida de:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '027',
				'name' => 'He sido elegido para:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '028',
				'name' => '“Pala" es a "Cavar" como "Cuchillo" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '029',
				'name' => 'A veces no puedo dormir porque una idea se mantiene rondando en mi mente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '030',
				'name' => 'Casi siempre logro las metas que me propongo en mi vida personal:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '031',
				'name' => 'Una ley anticuada debería cambiarse:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '032',
				'name' => 'No estoy a gusto cuando trabajo en un proyecto que requiere acciones rápidas que afecten a otros:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '033',
				'name' => 'La mayoría de la gente que conozco me considera un conversa­dor divertido:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '034',
				'name' => 'Cuando veo gente desaliñada y descuidada:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '035',
				'name' => 'Me avergüenzo un poquito cuando de repente me convierto en el foco de atención de un grupo de personas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '036',
				'name' => 'Me da gusto siempre el unirme a grupos grandes, por ejemplo a fiestas, bailes o reuniones públicas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '037',
				'name' => 'En la escuela preferí (o prefiero):',
				'created_at' => $date
			],
			[ 
				'questions_id' => '038',
				'name' => 'Cuando se me encarga algo, insisto en que se sigan mis  instrucciones o de lo contrario renuncio:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '039',
				'name' => 'Para los padres es más importante:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '040',
				'name' => 'En una tarea de grupo preferiría:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '041',
				'name' => 'De vez en cuando siento la necesidad de emprender actividades físicas rudas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '042',
				'name' => 'Preferiría reunirme con personas bien educadas que con personas rudas y rebeldes:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '043',
				'name' => 'Me siento terriblemente desanimado cuando me critican en un grupo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '044',
				'name' => 'Cuando mi jefe me llama, yo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '045',
				'name' => 'Lo que este mundo necesita es:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '046',
				'name' => 'Estoy siempre atento a los intentos propagandísticos en las cosas que leo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '047',
				'name' => 'De adolescente participé en los deportes escolares:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '048',
				'name' => 'Casi siempre mi cuarto está bien arreglado con cada cosa en su lugar:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '049',
				'name' => 'A veces me entra un estado de tensión y confusión cuando pienso en los sucesos del día:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '050',
				'name' => 'A veces dudo que la gente con la que estoy conversando, está realmente interesada en lo que digo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '051',
				'name' => 'Si tuviera que escoger, preferiría ser:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '052',
				'name' => 'En días festivos y cumpleaños:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '053',
				'name' => '“Cansado" es a "trabajo" como "orgulloso" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '054',
				'name' => '¿Cuál de estos tres objetos es de naturaleza diferente a los otros dos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '055',
				'name' => 'Mis amigos me han fallado:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '056',
				'name' => 'En ciertas características que tengo me siento definitivamente superior a la mayoría de la gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '057',
				'name' => 'Cuando  estoy molesto, trato con empeño de ocultar mis sentimientos a otros:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '058',
				'name' => 'Me gusta asistir a espectáculos o diversiones:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '059',
				'name' => 'Pienso que una amplia libertad es más importante que los buenos modales y el respeto a la Ley:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '060',
				'name' => 'Tengo la tendencia a quedarme callado en la presencia de personas mayores (de más edad, experiencia, jerarquía o puesto):',
				'created_at' => $date
			],
			[ 
				'questions_id' => '061',
				'name' => 'Se me hace difícil dirigirme o recitar ante un grupo grande:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '062',
				'name' => 'Tengo un buen sentido de orientación cuando estoy en un lugar desconocido (descubro con facilidad donde está el Norte, el Sur, etc:):',
				'created_at' => $date
			],
			[ 
				'questions_id' => '063',
				'name' => 'Si alguien se enoja conmigo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '064',
				'name' => 'do leo algún artículo tendencioso o injusto en una revis­ta, tiendo más bien a olvidarlo que a sentir ganas de "devolver­les el golpe":',
				'created_at' => $date
			],
			[ 
				'questions_id' => '065',
				'name' => 'Tiendo a olvidar cosas triviales y sin importancia, tales como nombres de calles, tiendas, etc:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '066',
				'name' => 'Me gustaría la vida de un veterinario ocupado en las enferme­dades y cirugías de los animales:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '067',
				'name' => 'Yo tomo mis alimentos con deleite, aunque no siempre tan cuidadosa y apropiadamente como alguna gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '068',
				'name' => 'Hay veces que no tengo la debida disposición de ánimo para ver a nadie:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '069',
				'name' => 'A veces la gente me advierte que demuestro mi excitación con voces y ademanes demasiado evidentes:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '070',
				'name' => 'De adolescente, si mi opinión era distinta a la de mis padres, por lo general:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '071',
				'name' => 'Preferiría tener una oficina propia, sin compartirla con otra persona:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '072',
				'name' => 'Preferiría gozar de una vida calmada, a mi manera, que ser admirado por mis éxitos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '073',
				'name' => 'Me siento maduro en la mayoría de las cosas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '074',
				'name' => 'El tipo de crítica que mucha gente me hace, me molesta en vez de ayudarme:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '075',
				'name' => 'Siempre soy capaz de controlar la expresión de mis sentimien­tos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '076',
				'name' => 'Al inventar algo útil, preferiría:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '077',
				'name' => '“Sorpresa" es a "Extraño" como "Miedo" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '078',
				'name' => '¿Cuál de estas fracciones es distinta de las otras dos?:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '079',
				'name' => 'No sé por qué, pero me parece que algunas gentes me ignoran o me evitan:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '080',
				'name' => 'La gente me trata menos razonablemente de lo que merecen mis buenas intenciones:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '081',
				'name' => 'Me molesta el uso de lenguaje obsceno, aun en el caso de grupos en los que no haya mujeres:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '082',
				'name' => 'Sin lugar a dudas, tengo menos amigos que la mayoría de la gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '083',
				'name' => 'Me disgustaría estar en un sitio donde no hubiera gente con quien conversar:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '084',
				'name' => 'A veces la gente me llama descuidado, a pesar de que piensan que soy una persona agradable:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '085',
				'name' => 'El "miedo escénico" en una variedad de situaciones sociales, es algo que he experimentado:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '086',
				'name' => 'Cuando estoy en un grupo pequeño, me contento con estar sentado y dejar que los otros realicen la mayor parte de la conversación:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '087',
				'name' => 'Prefiero leer:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '088',
				'name' => 'Cuando la gente mandona trata de manejarme, yo hago exactamente lo contrario de lo que ellas quieren:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '089',
				'name' => 'Por lo general, los jefes en mi trabajo o los miembros de mi familia me critican sólo cuando hay una causa real: ',
				'created_at' => $date
			],
			[ 
				'questions_id' => '090',
				'name' => 'En la calle o en las tiendas, no me gusta la manera en que algunas personas miran con fijeza a la gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '091',
				'name' => 'Durante un viaje largo, preferiría:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '092',
				'name' => 'En una situación que puede volverse peligrosa, creo que hay que hacer ruido y gritar aunque se pierdan la calma y la cortesía:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '093',
				'name' => 'Si mis conocidos me hacen ver que les caigo mal y me tratan mal:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '094',
				'name' => 'Me perturba que me alaben o me digan cumplidos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '095',
				'name' => 'Preferiría un trabajo con:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '096',
				'name' => 'Para mantenerme informado, me gusta:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '097',
				'name' => 'Me gusta tomar parte activa en asuntos sociales, comités, etc:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '098',
				'name' => 'Al cumplir una tarea no me quedo satisfecho a menos que aún los menores detalles reciban atención minuciosa:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '099',
				'name' => 'A veces me irritan demasiado las pequeñas contrariedades:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0100',
				'name' => 'Siempre duermo profundamente sin apenas hablar mientras lo hago:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0101',
				'name' => 'Sería más interesante trabajar en una empresa:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0102',
				'name' => '“Tamaño" es a "Longitud", como "Deshonesto" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0103',
				'name' => 'AB es a dc como SR es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0104',
				'name' => 'Cuando la gente no es razonable:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0105',
				'name' => 'Si alguien habla en voz alta cuando estoy escuchando música:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0106',
				'name' => 'Creo que se me describe mejor como:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0107',
				'name' => 'Asisto a eventos sociales sólo cuando tengo que hacerlo; pero el resto del tiempo me alejo de ellos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0108',
				'name' => 'Ser precavido y esperar poco, es mejor que ser optimista y esperar siempre el éxito:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0109',
				'name' => 'Cuando pienso en las dificultades de mi trabajo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0110',
				'name' => 'Encuentro fácil mezclarme con la gente en una reunión social:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0111',
				'name' => 'Generalmente se me solicita que intervenga cuando se necesi­ta un poco de diplomacia y persuasión para activar a la gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0112',
				'name' => 'Sería más interesante ser:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0113',
				'name' => 'Si estoy completamente seguro de que una persona es injusta o se porta de un modo egoísta, se lo digo, aunque me traiga problemas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0114',
				'name' => 'Algunas veces hago observaciones tontas en broma, nada mas para sorprender a la gente y ver qué dicen:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0115',
				'name' => 'Me gustaría ser reportero de noticias de teatro, ópera, conciertos, etc:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0116',
				'name' => 'Nunca siento necesidad de escribir garabatos ni estarme moviendo mientras estoy sentado en una reunión:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0117',
				'name' => 'Si alguien me dice algo que yo sé que no es correcto, tiendo a decirme a mí mismo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0118',
				'name' => 'Siento que voy a tener algún castigo, aún cuando no he hecho nada malo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0119',
				'name' => 'La idea de que las enfermedades provienen tanto de causas mentales como físicas es muy exagerada:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0120',
				'name' => 'La pompa y el esplendor de cualquier gran ceremonia estatal, son cosas que deben preservarse:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0121',
				'name' => 'Me molesta si la gente piensa que soy demasiado diferente o muy poco convencional:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0122',
				'name' => 'En la construcción de algo, preferiría  trabajar:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0123',
				'name' => 'Tengo ratos en los que me es difícil evitar un sentimiento de auto compasión:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0124',
				'name' => 'A menudo me disgusto demasiado rápido con la gente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0125',
				'name' => 'Siempre puedo cambiar hábitos antiguos sin dificultad y sin volver a caer en ellos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0126',
				'name' => 'Si el sueldo fuera igual, preferiría ser:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0127',
				'name' => '“Mejor" es a "Peor", como "Más lento" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0128',
				'name' => '¿Cuál es la serie que debe ir al final de esta lista:  	xooooxxoooxxx?',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0129',
				'name' => 'Cuando llega la hora de algo que yo había planeado y anticipado, a veces no siento ganas de ir:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0130',
				'name' => 'Puedo trabajar con cuidado en la mayor parte de las cosas, sin que me perturbe el ruido que la gente hace a mi alrededor:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0131',
				'name' => 'Ocasionalmente hablo a extraños de cosas que me parecen importantes, aún cuando ellos no me hayan preguntado:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0132',
				'name' => 'Paso mucho de mi tiempo libre hablando con amigos de los eventos sociales que nos divirtieron en el pasado:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0133',
				'name' => 'Me agrada hacer cosas temerarias y atrevidas nada más por diversión:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0134',
				'name' => 'Me molesta mucho ver un cuarto desarreglado:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0135',
				'name' => 'Me considero una persona muy sociable con la que es fácil llevarse:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0136',
				'name' => 'En mis relaciones sociales:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0137',
				'name' => 'Me gusta la música:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0138',
				'name' => 'Admiro más la belleza de un poema, que la de un revólver bien hecho:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0139',
				'name' => 'Si se pasa por alto alguna idea mía:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0140',
				'name' => 'Me gustaría trabajar como vigilante de delincuentes libera­dos bajo palabra:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0141',
				'name' => 'Se debe tener cuidado al mezclarse con todo tipo de extraños, porque hay peligros de infección, etc:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0142',
				'name' => 'Al viajar al extranjero, preferiría ir en una excursión bien organizada que planear yo mismo los lugares que me gustaría visitar:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0143',
				'name' => 'Se me considera acertadamente, sólo como una persona traba­jadora y de mediano éxito:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0144',
				'name' => 'Si la gente abusa de mi amistad, no me resisto y lo olvido pronto:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0145',
				'name' => 'Si surgiera alguna discusión acalorada en una discusión de grupo entre otros de los participantes, a mí:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0146',
				'name' => 'Me gusta  hacer mis planes solo, sin interrupciones ni sugerencias de otros:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0147',
				'name' => 'A veces dejo que mis acciones se vean influenciadas por mis celos:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0148',
				'name' => 'Estoy convencido de que "puede que el patrón no siempre tenga la razón, pero siempre es el patrón":',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0149',
				'name' => 'Me pongo en tensión cuando pienso en todas las cosas que me van a venir:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0150',
				'name' => 'No me molesta que la gente me grite lo que tengo que hacer cuando estoy jugando:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0151',
				'name' => 'Sería más interesante ser:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0152',
				'name' => '¿Cuál de las siguientes palabras no es de la misma clase que las otras dos?:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0153',
				'name' => '“Llama" es a "Calor", como "Rosa" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0154',
				'name' => 'Tengo sueños tan raros que turban mi dormir:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0155',
				'name' => 'Aunque las probabilidades de que algo tenga éxito sean prácticamente nulas, mantengo que hay que correr el riesgo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0156',
				'name' => 'Me agrada la situación en la que se tan bien lo que el grupo tiene que hacer, que naturalmente me pongo al mando:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0157',
				'name' => 'Preferiría vestirme sencilla y correctamente y no con un estilo personal y llamativo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0158',
				'name' => 'Me llama más la atención pasar una tarde con un pasatiempo tranquilo, que una fiesta animada:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0159',
				'name' => 'Me resisto a los consejos bien intencionados de otras personas, aunque sé que no debería hacerlo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0160',
				'name' => 'Al decidir cualquier cosa, siempre hago hincapié en las reglas básicas de lo bueno y lo malo:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0161',
				'name' => 'Me disgusta un poco que un grupo me observe cuando estoy trabajando:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0162',
				'name' => 'Dado que no siempre es posible que las cosas se hagan por métodos graduales y razonables, a veces es necesario usar la fuerza:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0163',
				'name' => 'En la escuela prefería (o prefiero):',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0164',
				'name' => 'A veces me ha molestado que la gente hable mal de mí a mis espaldas, sin tener razón:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0165',
				'name' => 'Hablar con la gente convencional, común y corriente:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0166',
				'name' => 'Algunas cosas me dan tanto disgusto que encuentro mejor callarme:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0167',
				'name' => 'En la educación es más importante:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0168',
				'name' => 'La gente me considera una persona estable, imperturbable e inconmovible ante las altas y las bajas de la vida:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0169',
				'name' => 'Pienso que la sociedad debería dejar que la razón la encami­nara hacia nuevas costumbres y hacer a un lado los viejos hábitos o maneras tradicionales:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0170',
				'name' => 'Me parece que es más importante para el mundo actual, resolver:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0171',
				'name' => 'Yo aprendo mejor:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0172',
				'name' => 'Me gusta hacer las cosas a mi modo, en vez de obrar de acuerdo con las reglas aprobadas:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0173',
				'name' => 'Me gusta esperar hasta estar seguro de que lo que estoy haciendo es correcto antes de presentar mis opiniones:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0174',
				'name' => 'A veces ciertas pequeñeces me ponen los nervios de punta, aunque me doy cuenta de que no tienen ninguna importancia:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0175',
				'name' => 'No es frecuente que por la exaltación del momento, diga cosas de las que más tarde tenga que arrepentirme:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0176',
				'name' => 'Si me pidieran que trabajara en una obra de caridad:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0177',
				'name' => '¿Cuál de las siguientes palabras no es de la misma clase que las otras?:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0178',
				'name' => '“Pronto" es a "Nunca" como "Cerca" es a:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0179',
				'name' => 'Si cometo una grave falta de educación, puedo olvidarla pronto:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0180',
				'name' => 'Me conocen como un "hombre de ideas", por que siempre propongo algunas cuando hay un problema:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0181',
				'name' => 'Pienso que puedo demostrar mejor:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0182',
				'name' => 'Me consideran una persona muy entusiasta:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0183',
				'name' => 'Me gusta un trabajo que tenga novedades, cambios  y viajes, aunque presente ciertos peligros:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0184',
				'name' => 'Soy una persona bastante estricta, que insiste siempre en hacer las cosas tan correctamente como sea posible:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0185',
				'name' => 'Me gustan los trabajos que requieren destreza y meticulosidad:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0186',
				'name' => 'Soy  del tipo  de  persona  dinámica, que se mantiene en constante actividad:',
				'created_at' => $date
			],
			[ 
				'questions_id' => '0187',
				'name' => 'Estoy seguro de que no he omitido ni dejado de contestar adecuadamente ninguna pregunta:',
				'created_at' => $date
			]
		]);
    }
}




