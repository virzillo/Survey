<?php

namespace App\Models;

use App\Models\Form;
use App\Models\User;
use App\Models\Question;
use App\Models\SurveyUser;

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

    public function users() {
      return $this->belongsToMany(User::class);
    }

    public function forms() {
      return $this->hasMany(Form::class);
    }


}
