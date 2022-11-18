<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
// Table name
    // public $table="data";

    //Primary key
    // public $primaryKey='id';
    protected $fillable = [
        "title",
        "company",
        "description",
        "logo"
    ];

    public $timestamps = false;
}
