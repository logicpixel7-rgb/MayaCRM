<?php

namespace Maya\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Maya\Core\Contracts\CountryState as CountryStateContract;

class CountryState extends Model implements CountryStateContract
{
    public $timestamps = false;
}
