<?php

namespace App\Models;

use App\Models\Question;
use App\Models\Anagrafica;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = ['titolo', 'descrizione', 'limite'];
    // protected $dates = ['deleted_at'];
    // protected $table = 'survey';

    public function questions() {
      return $this->hasMany(Question::class);
    }

    public function anagrafiche() {
        return $this->hasMany(Anagrafica::class);
      }

    // public function user() {
    //   return $this->belongsTo(User::class);
    // }

    // public function answers() {
    //   return $this->hasMany(Answer::class);
    // }


}
