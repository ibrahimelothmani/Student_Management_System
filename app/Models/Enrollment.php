<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollment';
    protected $primarykey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fee'];
    use HasFactory;

    public function batch()
    {
        return $this->belongsTo(Batch::class);

    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function fee()
    {
        return $this->fee . '$';
    }

}
