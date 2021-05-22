<?php

namespace App\Models;

use App\Models\Survey;
use App\Models\Question;
use App\Models\Anagrafica;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;
    protected $casts = [
        'risposte' => 'array',
        'domande'   => 'array'
    ];
    // protected $table = 'answer';
     protected $fillable = ['survey_id', 'user_id', 'anagrafica_id'];


     public function anagrafica() {
        return $this->belongsTo(Anagrafica::class);
      }

      public function survey() {
        return $this->belongsTo(Survey::class);
      }

    //   public function question() {
    //     return $this->belongsTo(Question::class);
    //   }

}
