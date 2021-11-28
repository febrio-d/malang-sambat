<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'employee_id');
    }

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
