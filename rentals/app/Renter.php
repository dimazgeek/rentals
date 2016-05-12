<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    //
      public function cars() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Car');
    }
}
