<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Record extends Model
{
    use HasFactory;
    // *NECESSARIO PER RIEMPIRE IL FILL IN STORE
    protected $fillable = ["title", "album", "author", "year", "editor", "length", "poster"];
}