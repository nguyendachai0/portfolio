<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkModel extends Model
{
    use HasFactory;
    protected $table = 'works'; // Specify the table name

    protected $fillable = ['id', 'link', 'name', 'description']; // Define fillable field
}
