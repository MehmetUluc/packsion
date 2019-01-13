<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $table = 'address_book';

    protected $primaryKey = 'address_book_id';

    public $timestamps = false;
}
