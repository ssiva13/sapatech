<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    //
        //Table Name
        protected $table = 'mailing_list'; //give custom name

        //primary key
        public $primaryKey = 'id';
    
        //Timestamps
        public $timestamps = true;
}
