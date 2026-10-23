<?php
declare(strict_types=1);

namespace Core;

use App\Models\Student;

/** Returns an array of error messages (empty array = valid). */
class Validator
{
    public static function student(array $data, ?int $ignoreId = null): array
    {
        $errors = [];

        $name = $data['name'] ?? '';
        if ($name === '') {
            $errors[] = 'Name is required.';
        } elseif (mb_strlen($name) > 100) {
            $errors[] = 'Name must be at most 100 characters.';
        }

        $email = $data['email'] ?? '';
        if ($email === '') {
            $errors[] = 'Email is required.';
        } elseif (mb_strlen($email) > 150 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is not valid.';
        } else {
            foreach (Student::where('email', $email) as $existing) {
                if ($ignoreId === null || (int) $existing->id !== $ignoreId) {
                    $errors[] = 'That email is already registered.';
                    break;
                }
            }
        }

        $course = $data['course'] ?? '';
        if ($course === '') {
            $errors[] = 'Course is required.';
        } elseif (mb_strlen($course) > 100) {
            $errors[] = 'Course must be at most 100 characters.';
        }

        return $errors;
    }
}
