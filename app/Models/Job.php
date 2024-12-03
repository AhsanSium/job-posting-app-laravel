<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
  public static function all(): array {
      return [
          [
              'id' => 1,
              'title' => 'Director',
              'salary' => 50000,
          ],
          [
              'id' => 2,
              'title' => 'Manager',
              'salary' => 40000,
          ],
          [
              'id' => 3,
              'title' => 'Officer',
              'salary' => 30000,
          ],
      ];
  }

  public static function find(int $id): array {
    $job = Arr::first(array: static::all(), callback: fn($job): bool  => $job['id'] == $id);
    if(!$job){ abort(404);}
    else {return $job;}
  }
};