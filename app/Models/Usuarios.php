<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $usu_id
 * @property integer $usu_cli_id
 * @property string $usu_usuario
 * @property string $usu_email
 * @property string $usu_senha
 * @property string $created_at
 * @property string $updated_at
 * @property Cliente $cliente
 */
class Usuarios extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'usu_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['usu_cli_id', 'usu_usuario', 'usu_email', 'usu_senha', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'usu_cli_id', 'cli_id');
    }
}
