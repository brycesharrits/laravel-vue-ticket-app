<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    public function creator(): HasOne
    {
        return $this->HasOne(User::class, 'created_by_id');
    }

    public function agent(): HasOne
    {
        return $this->HasOne(User::class, 'assigned_to_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(TicketReply::class, 'ticket_id');
    }

}