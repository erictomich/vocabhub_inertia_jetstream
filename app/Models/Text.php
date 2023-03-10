<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $table = 'text';
    protected $fillable = ['title', 'title_pt', 'slug', 'text', 'text_pt', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
