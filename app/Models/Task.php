<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TaskController;
use App\Models\Task;

class Task extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'tasks';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    protected $fillable = [
         'tasks',
    ];
}
