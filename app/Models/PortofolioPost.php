<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioPost extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    protected $with = ['category', 'user'];

    public function scopeFilterPost($posts, array $filters)
    {
        $posts->when($filters['search'] ?? false, function($posts, $search)
        {
            return $posts->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(PortofolioCategory::class, 'portofolio_category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
