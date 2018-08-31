<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Berita
 * @package App\Models
 * @version August 28, 2018, 1:31 pm UTC
 */
class Berita extends Model
{
    use SoftDeletes;

    public $table = 'beritas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'judul',
        'isi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string',
        'isi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'isi' => 'required'
    ];

    
}
