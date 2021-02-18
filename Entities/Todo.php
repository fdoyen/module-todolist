<?php

namespace Modules\Todo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Todo extends Model
{
    use HasFactory;
    protected $table = "todo";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
}