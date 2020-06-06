<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'title', 'description', 'amount', 'date'
    ];

    protected $dates = [
        'date', 'created_at', 'updated_at', 'deleted_at'
    ];
}
