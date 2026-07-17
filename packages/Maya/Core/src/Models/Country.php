<?php

namespace Maya\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Maya\Core\Contracts\Country as CountryContract;

class Country extends Model implements CountryContract
{
    public $timestamps = false;
}
