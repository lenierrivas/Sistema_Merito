<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsResponse extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
    	$date = Carbon::now();

		DB::table('test_questions_descriptions')->insert([
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '01',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '01',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '01',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '02',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '02',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '02',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'En un barrio sociable',
			'questions_refer_id' => '03',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '03',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Solitaria en lo profundo de un bosque',
			'questions_refer_id' => '03',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Siempre',
			'questions_refer_id' => '04',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Por lo general',
			'questions_refer_id' => '04',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Rara vez',
			'questions_refer_id' => '04',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '05',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '05',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '05',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '06',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'A veces',
			'questions_refer_id' => '06',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '06',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Por lo general',
			'questions_refer_id' => '07',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Algunas veces',
			'questions_refer_id' => '07',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '07',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '08',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '08',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '08',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Dejaría que se las arreglaran entre ellos mismos',
			'questions_refer_id' => '09',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '09',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Razonaría con ellos',
			'questions_refer_id' => '09',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Destaco con facilidad',
			'questions_refer_id' => '010',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '010',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Prefiero quedarme tranquilamente en un segundo plano',
			'questions_refer_id' => '010',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un ingeniero constructor',
			'questions_refer_id' => '011',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '011',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Escritor de dramas',
			'questions_refer_id' => '011',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '012',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '012',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '012',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '013',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '013',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '013',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '014',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '014',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '014',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'De acuerdo',
			'questions_refer_id' => '015',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '015',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'En desacuerdo',
			'questions_refer_id' => '015',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '016',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '016',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '016',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Solamente si es necesario',
			'questions_refer_id' => '017',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '017',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Fácilmente, cada vez que tengo oportunidad',
			'questions_refer_id' => '017',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '018',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '018',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '018',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'No me siento culpable',
			'questions_refer_id' => '019',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '019',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Me siento no obstante un poco culpable',
			'questions_refer_id' => '019',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '020',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '020',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '020',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Mis sentimientos',
			'questions_refer_id' => '021',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Mis sentimientos y mi razón por igual',
			'questions_refer_id' => '021',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Mi razón',
			'questions_refer_id' => '021',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '022',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '022',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '022',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '023',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '023',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '023',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Decir las cosas tal y como se me ocurre',
			'questions_refer_id' => '024',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '024',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Ordenar bien mis pensamientos primero',
			'questions_refer_id' => '024',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '025',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '025',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '025',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un carpintero',
			'questions_refer_id' => '026',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '026',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Mesonero en un buen restaurante',
			'questions_refer_id' => '026',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Solo unos cuantos cargos',
			'questions_refer_id' => '027',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Varios',
			'questions_refer_id' => '027',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Muchos cargos',
			'questions_refer_id' => '027',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Afilado',
			'questions_refer_id' => '028',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Cortar',
			'questions_refer_id' => '028',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Punta',
			'questions_refer_id' => '028',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '029',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '029',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '029',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '030',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '030',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '030',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Solamente después de considerable discusión',
			'questions_refer_id' => '031',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '031',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Rápidamente',
			'questions_refer_id' => '031',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '032',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '032',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '032',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '033',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '033',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '033',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Simplemente la acepto',
			'questions_refer_id' => '034',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '034',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Me disgusta y molesta',
			'questions_refer_id' => '034',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '035',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '035',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '035',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '036',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '036',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '036',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'La música',
			'questions_refer_id' => '037',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '037',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'La artesanía y los trabajos manuales',
			'questions_refer_id' => '037',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '038',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '038',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '038',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Ayudar a sus hijos a desarrollar sus afectos',
			'questions_refer_id' => '039',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Término medio ',
			'questions_refer_id' => '039',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Enseñar a sus hijos cómo controlar sus emociones',
			'questions_refer_id' => '039',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Intentar mejorar los arreglos',
			'questions_refer_id' => '040',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '040',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Llevar los registros y ver que se cumplan las reglas',
			'questions_refer_id' => '040',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '041',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '041',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '041',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '042',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '042',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '042',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '043',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '043',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '043',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Aprovecho la oportunidad para pedir algo que quiero',
			'questions_refer_id' => '044',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '044',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Temo haber hecho algo mal',
			'questions_refer_id' => '044',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Más ciudadanos "sólidos" y estables',
			'questions_refer_id' => '045',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '045',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Más "idealistas" con planes para un mundo mejor',
			'questions_refer_id' => '045',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '046',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '046',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '046',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '047',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Regularmente',
			'questions_refer_id' => '047',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Bastante a menudo',
			'questions_refer_id' => '047',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '048',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '048',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '048',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '049',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '049',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '049',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '050',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '050',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '050',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un guardabosque',
			'questions_refer_id' => '051',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '051',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Profesor de secundaria',
			'questions_refer_id' => '051',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Me gusta dar regalos personales',
			'questions_refer_id' => '052',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '052',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Siento que comprar regalos es un poco latoso',
			'questions_refer_id' => '052',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sonrisa',
			'questions_refer_id' => '053',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Éxito',
			'questions_refer_id' => '053',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Feliz',
			'questions_refer_id' => '053',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Vela',
			'questions_refer_id' => '054',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Luna',
			'questions_refer_id' => '054',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Luz eléctrica',
			'questions_refer_id' => '054',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Casi nunca',
			'questions_refer_id' => '055',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '055',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '055',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '056',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '056',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '056',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Verdad',
			'questions_refer_id' => '057',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '057',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '057',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Más de una vez por semana',
			'questions_refer_id' => '058',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Una vez a la semana',
			'questions_refer_id' => '058',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Menos de una vez por semana',
			'questions_refer_id' => '058',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '059',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '059',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '059',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '060',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '060',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '060',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '061',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '061',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '061',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '062',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '062',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '062',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Trataría de calmarlo',
			'questions_refer_id' => '063',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '063',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Me irritaría',
			'questions_refer_id' => '063',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '064',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '064',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '064',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '065',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '065',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '065',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '066',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '066',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '066',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '067',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '067',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '067',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Muy raramente',
			'questions_refer_id' => '068',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '068',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '068',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '069',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '069',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '069',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Conservaba mi propia opinión',
			'questions_refer_id' => '070',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '070',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Aceptaba la autoridad de mis padres',
			'questions_refer_id' => '070',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '071',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '071',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '071',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '072',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '072',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '072',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Verdad',
			'questions_refer_id' => '073',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '073',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '073',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '074',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '074',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '074',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '075',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '075',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '075',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Perfeccionarlo en el laboratorio',
			'questions_refer_id' => '076',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '076',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Vendérselo a la gente',
			'questions_refer_id' => '076',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Valiente',
			'questions_refer_id' => '077',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '077',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Terrible',
			'questions_refer_id' => '077',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => '3/7',
			'questions_refer_id' => '078',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => '3/9',
			'questions_refer_id' => '078',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => '/11',
			'questions_refer_id' => '078',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '079',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '079',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '079',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'A menudo',
			'questions_refer_id' => '080',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '080',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '080',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '081',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '081',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '081',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '082',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '082',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '082',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '083',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '083',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '083',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '084',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '084',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '084',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '085',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'A veces',
			'questions_refer_id' => '085',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Casi nunca',
			'questions_refer_id' => '085',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '086',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '086',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '086',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Una narración realista de batallas militares o políticas',
			'questions_refer_id' => '087',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '087',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Una novela sentimental e imaginativa',
			'questions_refer_id' => '087',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '088',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '088',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '088',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '089',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '089',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '089',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '090',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '090',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '090',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Leer algo profundo pero interesante',
			'questions_refer_id' => '091',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '091',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Pasar el tiempo charlando informalmente con un compañero de viaje',
			'questions_refer_id' => '091',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '092',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '092',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '092',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Me importa poco',
			'questions_refer_id' => '093',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '093',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Tiendo a ponerme triste',
			'questions_refer_id' => '093',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '094',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '094',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '094',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un sueldo fijo y seguro',
			'questions_refer_id' => '095',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '095',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Un sueldo elevado que dependiera de mi capacidad para persuadir constantemente a la gente de que lo ,merezco',
			'questions_refer_id' => '095',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Discutir los problemas con la gente',
			'questions_refer_id' => '096',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '096',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Confiar en los informes periodísticos actuales',
			'questions_refer_id' => '096',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '097',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '097',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '097',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '098',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '098',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '098',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '099',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '099',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '099',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0100',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0100',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0100',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Hablando con los clientes',
			'questions_refer_id' => '0101',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0101',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Llevando las cuentas y registros de la oficina',
			'questions_refer_id' => '0101',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Prisión',
			'questions_refer_id' => '0102',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Pecado',
			'questions_refer_id' => '0102',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Robo',
			'questions_refer_id' => '0102',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'qp',
			'questions_refer_id' => '0103',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'pq',
			'questions_refer_id' => '0103',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'tu',
			'questions_refer_id' => '0103',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Me quedo tranquilo',
			'questions_refer_id' => '0104',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0104',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Los desprecio',
			'questions_refer_id' => '0104',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Me puedo concentrar en la música y no me molesta',
			'questions_refer_id' => '0105',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0105',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Considero que me echan a perder mi entretenimiento y me molesto',
			'questions_refer_id' => '0105',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cortés y tranquilo',
			'questions_refer_id' => '0106',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0106',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Enérgico',
			'questions_refer_id' => '0106',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0107',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0107',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0107',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0108',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0108',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0108',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Trato de planear con anticipación antes de afrontar­las',
			'questions_refer_id' => '0109',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Término medio',
			'questions_refer_id' => '0109',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Supongo que podré manejarlas cuando se presenten',
			'questions_refer_id' => '0109',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0110',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0110',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0110',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0111',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0111',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0111',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un orientador vocacional, que ayuda a los jóvenes a encontrar empleo',
			'questions_refer_id' => '0112',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0112',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Gerente Técnico en una fábrica',
			'questions_refer_id' => '0112',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0113',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0113',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0113',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0114',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0114',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0114',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0115',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0115',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0115',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0116',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0116',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0116',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Es un mentiroso',
			'questions_refer_id' => '0117',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0117',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Aparentemente está mal informado',
			'questions_refer_id' => '0117',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '0118',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '0118',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '0118',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0119',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0119',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0119',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0120',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0120',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0120',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Mucho',
			'questions_refer_id' => '0121',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Algo',
			'questions_refer_id' => '0121',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nada',
			'questions_refer_id' => '0121',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'En un comité',
			'questions_refer_id' => '0122',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0122',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Por mi propia cuenta',
			'questions_refer_id' => '0122',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'A menudo',
			'questions_refer_id' => '0123',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '0123',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '0123',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0124',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'ntermedio',
			'questions_refer_id' => '0124',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0124',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0125',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0125',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0125',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Abogado',
			'questions_refer_id' => '0126',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0126',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Navegante o piloto',
			'questions_refer_id' => '0126',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Rápido',
			'questions_refer_id' => '0127',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Optimo',
			'questions_refer_id' => '0127',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Más veloz',
			'questions_refer_id' => '0127',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'oxxx',
			'questions_refer_id' => '0128',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'ooxx',
			'questions_refer_id' => '0128',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'xooo',
			'questions_refer_id' => '0128',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0129',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0129',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0129',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0130',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0130',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0130',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0131',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0131',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0131',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0132',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0132',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0132',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0133',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0133',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0133',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0134',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0134',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0134',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0135',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0135',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0135',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Demuestro mis emociones como quiero',
			'questions_refer_id' => '0136',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0136',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Me las guardo',
			'questions_refer_id' => '0136',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Aguda, ligera y viva',
			'questions_refer_id' => '0137',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0137',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Emotiva y sentimental',
			'questions_refer_id' => '0137',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0138',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0138',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0138',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'No hago nada',
			'questions_refer_id' => '0139',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0139',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Le doy a la gente otra oportunidad de escucharla',
			'questions_refer_id' => '0139',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0140',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0140',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0140',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0141',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0141',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0141',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0142',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0142',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0142',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0143',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0143',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0143',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0144',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0144',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0144',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Me gustaría ver un "ganador"',
			'questions_refer_id' => '0145',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0145',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Quisiera que la discusión se allanara',
			'questions_refer_id' => '0145',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0146',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0146',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0146',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0147',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0147',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0147',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0148',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0148',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0148',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0149',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'A veces',
			'questions_refer_id' => '0149',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0149',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0150',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0150',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0150',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Un artista',
			'questions_refer_id' => '0151',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0151',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Un secretario encargado de un club social',
			'questions_refer_id' => '0151',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cualquiera',
			'questions_refer_id' => '0152',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Algo',
			'questions_refer_id' => '0152',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Más',
			'questions_refer_id' => '0152',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Espina',
			'questions_refer_id' => '0153',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Pétalos Rojos',
			'questions_refer_id' => '0153',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Perfume',
			'questions_refer_id' => '0153',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'A menudo',
			'questions_refer_id' => '0154',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Ocasionalmente',
			'questions_refer_id' => '0154',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Prácticamente nunca',
			'questions_refer_id' => '0154',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0155',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0155',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0155',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0156',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0156',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0156',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0157',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0157',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0157',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0158',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0158',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0158',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Con frecuencia',
			'questions_refer_id' => '0159',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Casi nunca',
			'questions_refer_id' => '0159',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Nunca',
			'questions_refer_id' => '0159',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0160',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0160',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0160',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0161',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0161',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0161',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0162',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0162',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0162',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Lengua y literatura',
			'questions_refer_id' => '0163',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Quién sabe',
			'questions_refer_id' => '0163',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Aritmética o matemáticas',
			'questions_refer_id' => '0163',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0164',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0164',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0164',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Es a menudo interesante e importante',
			'questions_refer_id' => '0165',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Término medio',
			'questions_refer_id' => '0165',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Me molesta porque dicen tonterías  y  cosas superficiales',
			'questions_refer_id' => '0165',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0166',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0166',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0166',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Darle al niño suficiente cariño',
			'questions_refer_id' => '0167',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Término medio',
			'questions_refer_id' => '0167',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Hacer que el niño adquiera costumbres y actitudes deseables',
			'questions_refer_id' => '0167',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0168',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0168',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0168',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0169',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0169',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0169',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'El problema moral',
			'questions_refer_id' => '0170',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0170',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Las dificultades políticas',
			'questions_refer_id' => '0170',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Leyendo un libro bien escrito',
			'questions_refer_id' => '0171',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Término medio',
			'questions_refer_id' => '0171',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Interviniendo en la discusión de un grupo',
			'questions_refer_id' => '0171',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0172',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0172',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0172',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Siempre',
			'questions_refer_id' => '0173',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Por lo general',
			'questions_refer_id' => '0173',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Sólo si es conveniente',
			'questions_refer_id' => '0173',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0174',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0174',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0174',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0175',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0175',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0175',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Aceptaría',
			'questions_refer_id' => '0176',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0176',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Respondería cortésmente que estoy ocupado',
			'questions_refer_id' => '0176',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Ancho',
			'questions_refer_id' => '0177',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Zigzag',
			'questions_refer_id' => '0177',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Recto',
			'questions_refer_id' => '0177',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'En ninguna parte',
			'questions_refer_id' => '0178',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Lejos',
			'questions_refer_id' => '0178',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Aparte',
			'questions_refer_id' => '0178',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0179',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0179',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0179',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0180',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0180',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0180',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Valor ante los desafíos',
			'questions_refer_id' => '0181',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0181',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Mi tolerancia para con los deseos de los demás',
			'questions_refer_id' => '0181',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0182',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0182',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0182',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0183',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0183',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0183',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Cierto',
			'questions_refer_id' => '0184',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0184',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'Falso',
			'questions_refer_id' => '0184',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0185',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0185',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0185',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0186',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Indeciso',
			'questions_refer_id' => '0186',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0186',
			'created_at' => $date
			],
			[
			'lyrics' => 'A',
			'descriptions' => 'Sí',
			'questions_refer_id' => '0187',
			'created_at' => $date
			],
			[
			'lyrics' => 'B',
			'descriptions' => 'Intermedio',
			'questions_refer_id' => '0187',
			'created_at' => $date
			],
			[
			'lyrics' => 'C',
			'descriptions' => 'No',
			'questions_refer_id' => '0187',
			'created_at' => $date
			]
		]);
    }
}
