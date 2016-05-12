<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
      public function renter() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Renter');
    }
    
}
