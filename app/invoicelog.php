<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoicelog extends Model
{
    protected $fillable = [
        'invoice', 'payment','invoice_date','invoice_month','invoice_year'
    ];
}
