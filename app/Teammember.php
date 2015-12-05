<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
  public function user()
  {
      # Book belongs to Author
      # Define an inverse one-to-many relationship.
      return $this->belongsTo('\p4\user');
  }
}
