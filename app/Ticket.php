<?php
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
=======
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	class Ticket extends Model
	{
	    protected $guarded = ['id'];
	    public function comments()
	    {
	        return $this->hasMany('App\Comment', 'post_id');
	    }
	}
?>

>>>>>>> commit in develop
