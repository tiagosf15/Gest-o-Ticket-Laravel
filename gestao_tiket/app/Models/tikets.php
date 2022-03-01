<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class tikets extends Model
{
    use HasFactory;
    protected $fillable = ['tick_tema', 'tick_descricao', 'tick_codigoredmine'];
    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];
    public function store(Request $request){
        $rule = $request->validate([
        'tick_tema' => 'required|max:50',
        'tick_descricao' => 'required',
        'tick_codigoredmine' => 'required|max:50'
    ]);
}
    public function usuario(){
       
        return $this->belongsTo(User::class);
    }
}
