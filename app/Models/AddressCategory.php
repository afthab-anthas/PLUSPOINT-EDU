<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressCategory extends Model
{
    protected $table = 'address_categories';

    public function addresses()
    {
        return $this->hasMany(Address::class, 'address_id', 'id');
    }
}