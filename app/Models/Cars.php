<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model {

    protected $table = "cars";

    protected $fillable = [
        "name",
        "description",
        "model",
        "date"
    ];

    protected $casts = [
        "date" => "Timestamp"
    ];

    public $timestamps = false;
    // O código acima desativa o timestamp porque nós não temos as colunas abaixo.
    //create_at
    //update_at
    //deleted_at

}


?>