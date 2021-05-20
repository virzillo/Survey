<?php

namespace App\Models;

use App\Models\User;

use App\Models\Survey;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function survey() {
        return $this->belongsTo(Survey::class);
      }

      public function question() {
        return $this->belongsTo(Question::class);
      }
      public function user() {
        return $this->belongsTo(User::class);
      }
}
