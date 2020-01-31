<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    protected $fillable = [
        'payer_name', 'payer_email', 'payer_phone', 'payment_detail', 'due_amount', 'order_id', 'tin', 'specified_merchant','status',
    ];
}
