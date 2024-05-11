<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(PortofolioPost::class, 'portofolio_category_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
