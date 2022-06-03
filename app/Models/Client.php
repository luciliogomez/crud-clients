<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['nome','email'];

    public function search($filter)
    {
        $results = $this->where(function($query) use($filter){
            if($filter){
                $query->where('nome','LIKE',"%{$filter}%");
            }
        })->paginate(1);

        return $results;
    }
}
