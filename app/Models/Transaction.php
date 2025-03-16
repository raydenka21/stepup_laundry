<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaction extends Model
{
    use SoftDeletes;
    protected $table = 'transaction';
    protected $fillable = [
        'invoice_number',
        'name',
        'phone',
        'email',
        'address',
        'booking_date',
        'status',
        'payment_method',
        'payment_status',
        'service',
        'qty',
        'note',
    ];
}