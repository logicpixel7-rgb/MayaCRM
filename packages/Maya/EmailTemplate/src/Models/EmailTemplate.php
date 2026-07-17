<?php

namespace Maya\EmailTemplate\Models;

use Illuminate\Database\Eloquent\Model;
use Maya\EmailTemplate\Contracts\EmailTemplate as EmailTemplateContract;

class EmailTemplate extends Model implements EmailTemplateContract
{
    protected $fillable = [
        'name',
        'subject',
        'content',
    ];
}
