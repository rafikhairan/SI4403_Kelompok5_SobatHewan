<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName() {
        return 'invoice_no';
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function petOwner() {
        return $this->belongsTo(PetOwner::class, 'pet_owner_id', 'pet_owner_id');
    }
}
