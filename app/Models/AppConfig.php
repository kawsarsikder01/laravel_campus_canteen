<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    use HasFactory;
    protected $table = 'app_configers';
    protected $fillable = [
        'app_name',
        'company_name',
        'phone',
        'email',
        'address',
        'business_address',
        'logo',
        'logo_text',
        'invoice_header',
        'footer_header'
    ];
}
