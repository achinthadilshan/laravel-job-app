<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'company', 'email', 'website', 'type', 'city', 'tags', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'LIKE', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $searchTerm = '%' . request('search') . '%';
            $query->where('title', 'LIKE', $searchTerm)
                ->orWhere('description', 'LIKE', $searchTerm)
                ->orWhere('tags', 'LIKE', $searchTerm);;
        }
    }
}
