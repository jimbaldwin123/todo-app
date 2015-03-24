<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    
    protected $guarded = [];
        
    public function tasks($col = 'updated_at', $ord = 'desc')
    {    
        // workaround - for some reason the default $col isn't populating - JLB 2015-03-23
        if(!isset($col)){
            $col = 'updated_at';
        }
        return $this->hasMany('App\Task')->orderBy($col,$ord);
    }

    public function scopeUpdatedatOrderby($query,$ord)
    {
        // return $query->orderBy('updated_at',$ord);
    }
}
