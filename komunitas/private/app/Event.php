<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $fillable = ['nama_event', 'upload', 'tanggal', 'waktu', 'deskripsi', 'tempat','formulir'];
    // protected $guarded=[];
}