<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$1000',
            ],
            [
                'id' => '2',
                'title' => 'Developer',
                'salary' => '$800',
            ],
            [
                'id' => '3',
                'title' => 'Designer',
                'salary' => '$700',
            ]
        ];
    }

    public static function find(int $id):?array {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);
    }
}