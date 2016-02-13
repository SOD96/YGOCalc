<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'deck', 'note', 'lifepoints', 'active', 'duel_id', 'player_id','lifeadd'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    /**
     * Gets the game associated with this log
     *
     * @return Model
     */
    public function game()
    {
        return $this->belongsToMany('App\Game');
    }

}
