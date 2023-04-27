<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'contest_id', 'ticket_id', 'title',  'status'
    ];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
