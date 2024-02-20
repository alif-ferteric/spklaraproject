<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }
}


//contoh post model
// <?php

// namespace App\Models;

// use Cviebrock\EloquentSluggable\Sluggable;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory,sluggable;

//     // protected $fillable = ['title', 'excerpt', 'body'];
//     protected $guarded = ['id'];
//     //mindahkan with nya letak di model
//     protected $with = ['category', 'author'];

//     //untuk fitur search di model 
//     public function scopeFilter($query, array $filters)
//     {

//         $query->when($filters['search'] ?? false, function ($query, $search) {
//             return $query->where('title', 'like', '%' . $search . '%')
//                 ->orWhere('body', 'like', '%' .  $search . '%');
//         });
//         // versi callback
//         $query->when($filters['category'] ?? false, function ($query, $category) {
//             return $query->whereHas('category', function ($query) use ($category) {
//                 $query->where('slug', $category);
//             });
//         });
//         // versi arrow function
//         $query->when($filters['author'] ?? false, fn ($query, $author) =>
//         $query->whereHas('author', fn ($query) =>
//         $query->where('username', $author)));
//     }
//     //relasi ke tabel kategory 1 ke 1
//     public function category()
//     {
//         return $this->belongsTo(Category::class);
//     }
//     public function author()
//     {
//         return $this->belongsTo(User::class, 'user_id');
//     }
//     public function getRouteKeyName()
//     {
//         return 'slug';
//     }
//     public function sluggable(): array
//     {
//         return [
//             'slug' => [
//                 'source' => 'title'
//             ]
//         ];
//     }
// }
