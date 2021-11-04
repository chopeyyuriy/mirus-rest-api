<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
      'order_id',
      'card_number',
      'month',
      'year',
      'cvc',
      'owner_name',
      'country',
      'phone_number'
    ];
}
