<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaction';

    public function frog()
    {
        return $this->belongsTo(Frog::class, 'id_frog');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
