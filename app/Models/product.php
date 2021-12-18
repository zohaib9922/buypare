<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


class Product extends Model
{
    use HasFactory;
    
}

interface SearchRepository
{
    public function search(string $query): Collection;
}