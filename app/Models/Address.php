<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $table = 'address';

    public function category()
    {
        return $this->belongsTo(AddressCategory::class, 'address_id', 'id');
    }
}