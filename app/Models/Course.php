<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'startDate',
        'endDate',
    ];
    protected $table = 'course';
    public function period(){
        return $this->hasMany(Period::class);
    }

    public function holiday(){
        return $this->hasMany(Holiday::class);
    }
}
