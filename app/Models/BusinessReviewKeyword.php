<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class BusinessReviewKeyword extends Model
{
	use HasUuid;
    protected $hidden = ['uuid'];
}
