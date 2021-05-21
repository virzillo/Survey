<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

   // protected $guarded = [];

    protected $casts = [
        'opzione' => 'array',
    ];
     protected $fillable = ['titolo', 'descrizione', 'opzione', 'tipo'];

    public function survey() {
      return $this->belongsTo(Survey::class);
    }

    // public function user() {
    //   return $this->belongsTo(User::class);
    // }

    public function answers() {
      return $this->hasMany(Answer::class);
    }




}
