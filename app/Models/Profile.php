<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'profiles';

    protected $fillable = [
        'school_id',
        'promo_id',
        'name',
        'surnames',
        'email',
        'password',
        'job',
        'role_id',
        'github',
        'birth_date',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function user()
    {
        return $this->hasOne(User::class);

    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }
}