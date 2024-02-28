<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true; 
    protected $fillable = ['fname', 'lname', 'email', 'address', 'city', 'state', 'zip', 'phone', 'checkinDate', 'checkinTime', 'checkoutDate', 'checkoutTime', 'preference', 'adults', 'childs'];
}
