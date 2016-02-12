<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'games';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['players', 'password', 'name', 'winner', 'active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    /**
     * Gets all of the likes associated with this mod.
     *
     * @return Model
     */
    public function duelists()
    {
        return $this->belongsToMany('App\Players');
    }
}
