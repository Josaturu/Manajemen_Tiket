<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'title', 'description', 'status', 'priority', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function edit(Tiket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    

    // public function agent()
    // {
    //     return $this->belongsTo(User::class, 'agent_id');
    // }

    public function report()
    {
        return $this->hasOne(Report::class, 'ticket_id');
    }
}
