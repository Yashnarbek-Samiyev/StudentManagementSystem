<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id','paid_date','amount'];



    public function enrollments()
    {
        return $this->belongsTo(Enrollment::class, 'enrollment_id','id');
    }
}
