<?php

namespace Database\Seeders;

use App\Models\Survey;
use App\Models\Question;
use Illuminate\Database\Seeder;

class CreateSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    	$survey=Survey::create([
	            'titolo' => 'Survey 1',
	            'descrizione' => 'Descrizione survey',
	            'limite' => 50,
	        ]);



            Question::create([
                'titolo' => 'Ti capita di eseguire diagnosi precoce di OA (in cani fino a 18 mesi di vita)?',
                'survey_id' => $survey->id,
                'descrizione' => '',
                'tipo' => 'radiobutton',
                'opzione' => ["Mai","Raramente","Spesso"],
	        ]);
            Question::create([
                'titolo' => 'Quante visite per OA effettui ogni mese?',
                'descrizione' => '',
                'survey_id' => '1',
                'tipo' => 'radiobutton',
                'opzione' => ["Da nessuna a 2","da 3 a 5","da 6 a 10","da 11 a 20",">20"],
	        ]);
            Question::create([
                'titolo' => 'Quale scala del dolore utilizzi per valutare lo stadio di dolore del cane?',
                'descrizione' => 'Sara le avrà mostrate durante la sua ppt, scrivere quale nel campo note',
                'survey_id' => '1',
                'tipo' => 'radiobutton',
                'opzione' => ["Internazionale","Personale","Nessuna"],
	        ]);
            Question::create([
                'titolo' => 'Quali sono i farmaci che utilizzi maggiormente per il trattamento dell\'OA canina?',
                'descrizione' => '3 risposte possibili no campo libero, vogliamo gli intervistati si attengano alla traccia, nel campo note finale scrivere eventuali commenti',
                'survey_id' => '1',
                'tipo' => 'checkbox',
                'opzione' => ["Previcox","Meloxicam","Librela","Trocoxil","Galliprant","Cimalgex","Carprofen"],
	        ]);
            Question::create([
                'titolo' => 'Cosa miglioreresti nel trattamento farmacologico dell\'OA?',
                'descrizione' => '',
                'survey_id' => '1',
                'tipo' => 'checkbox',
                'opzione' => ["Efficacia","Sicurezza","Facilità di somministrazione/Palatabilità","Miglior compliance del proprietario","Costo terapia","Marginalità"],
	        ]);
            Question::create([
                'titolo' => 'Per quanto tempo generalmente suggerisci l\'uso di un antinfiammatorio per la terapia dell\'OA canina?',
                'descrizione' => '',
                'survey_id' => '1',
                'tipo' => 'radiobutton',
                'opzione' => ["Minimo 1 mese","Da 1 a 3 mesi","Da 3 a 6 mesi"],
	        ]);
            Question::create([
                'titolo' => 'Rilevi "riacutizzazioni" del dolore durante la terapia?',
                'descrizione' => '',
                'survey_id' => '1',
                'tipo' => 'radiobutton',
                'opzione' => ["Mai","Raramente","Spesso","Sempre"],
	        ]);
            Question::create([
                'titolo' => 'I tuoi clienti seguono in maniera precisa la terapia da te consigliata per l\'OA ? ',
                'descrizione' => 'maniera precisa: costanti nella somm.ne, che non riducano/aumentino i dosaggi, che non la interrompano a piacimento. INDICARE LE MOTIVAZIONI NEL CAMPO NOTE',
                'survey_id' => '1',
                'tipo' => 'radiobutton',
                'opzione' => ["Mai","Raramente","Spesso","Sempre"],
	        ]);

    }
}
