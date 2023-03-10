<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';

    protected $fillable = [
        'subject',
        'parent_subject_id',
        'order',
        'slug'
    ];

    public function parentSubject()
    {
        return $this->belongsTo(Subject::class, 'parent_subject_id');
    }

    public function childSubjects()
    {
        return $this->hasMany(Subject::class, 'parent_subject_id');
    }
}
