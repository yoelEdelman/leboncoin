<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * Get the ads for the region.
     */
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
