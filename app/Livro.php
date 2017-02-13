<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    //
    protected $fillable = [
      'titulo', 'preco', 'editora_id'
    ];

    public function editora()
    {
      return $this->belongsTo(Editora::class);
    }

    public function atualiza($request)
    {
      $this->fill($request);
      $this->save();
    }
}
