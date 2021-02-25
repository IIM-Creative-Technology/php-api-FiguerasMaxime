<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'prof_id',
        'classe_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function prof() {
        return $this->belongsTo(Prof::class);
    }

    public function classes() {
        return $this->hasMany(Classe::class);
    }

    public function notes() {
        return $this->hasMany(Note::class);
    }

}
