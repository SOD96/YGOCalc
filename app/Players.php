<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'players';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'deck', 'note', 'lifepoints', 'active', 'duel_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    /**
     * Gets the game associated with this player
     *
     * @return Model
     */
    public function game()
    {
        return $this->belongsTo('App\Game');
    }

}
