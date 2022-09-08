<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'price', 'geolocation', 'verified', 'user_id', 'category_id', 'location_id', 'ownership_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function ownership()
    {
        return $this->belongsTo(Ownership::class);
    }
}
