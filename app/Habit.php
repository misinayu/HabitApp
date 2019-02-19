<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    // Table Name
    protected $table = 'habits';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
