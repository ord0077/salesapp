<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
     protected $fillable = [
       "client_name",
       "client_email",
       "client_number",
       "client_cnic",
       "location",
       "choosen_fund",
       "choosen_fund_id",
       "crf",
       "irf",
       "longitude",
       "latitude",
       "rf",
       "qrs",
       "decision",
       "userScore",
       "user_id"
    ];
}
