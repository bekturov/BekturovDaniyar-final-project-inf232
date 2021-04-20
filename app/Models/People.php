<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;

class People extends Model
{
    use HasFactory;
    protected $table = "people";
    protected $fillable = ['photo', 'name', 'surname', 'age', 'country_id'];
    
    public function countries()
    {
        return $this->belongsTo(Countries::class);
    }
    public function get($id){
        $first = Countries::where('id', $id)->first();
        return $first->name;

    }
}
