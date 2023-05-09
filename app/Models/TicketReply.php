<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{

    public function creator(): HasOne
    {
        return $this->HasOne(User::class, 'created_by_id');
    }

    public function ticket(): HasOne
    {
        return $this->HasOne(Ticket::class, 'ticket_id');
    }
}