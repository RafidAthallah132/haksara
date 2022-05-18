<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class QuestionType extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title'];
    
    public static function boot()
    {
        parent::boot();

        QuestionType::observe(new \App\Observers\UserActionsObserver);
    }
    
}
