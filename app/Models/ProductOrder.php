<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function invoice()
    {

        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }
}
