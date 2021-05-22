<?php

namespace App\Models;

use App\Models\Form;
use App\Models\User;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anagrafica extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'anagrafiche';

    public function user() {
          return $this->belongsTo(User::class);
    }

    public function survey() {
        return $this->belongsTo(Survey::class);
    }
    public function questions() {
        return $this->hasMany(Question::class);
      }
      public function forms() {
        return $this->hasMany(Form::class);
      }

}
