<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    //es un friltro para cambiar los caracteres de un string
    protected function titulo(): Attribute{
        return Attribute::make(
            set: function($value){//mutador
                return strtolower($value);
            },
            get: function($value){//accesor
                return ucfirst($value);
            }
        );
    }
    protected function cast(){//castea los atribustos de la tabla
        return [
            'published_ad' => 'datatime',
        ];
    }
}
