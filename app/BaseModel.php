<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    //
	public function getCreatedAtAttribute ($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        $utc->setTimezone('America/Chicago');
        return $utc;
	}

	public function getUpdatedAtAttribute ($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        $utc->setTimezone('America/Chicago');
        return $utc;
	}







}
