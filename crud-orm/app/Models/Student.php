<?php
declare(strict_types=1);

namespace App\Models;

use Core\Model;

class Student extends Model
{
    protected static string $table = 'students';
    protected static array $fillable = ['name', 'email', 'course'];

    // Columns become public properties when rows are mapped to objects.
    public $id;
    public $name;
    public $email;
    public $course;
    public $created_at;
}
