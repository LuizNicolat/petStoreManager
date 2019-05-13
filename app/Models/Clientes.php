<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $cli_id
 * @property string $cli_nome
 * @property int $cli_idade
 * @property int $cep
 * @property string $cli_rua
 * @property string $cli_numero
 * @property string $cli_bairro
 * @property string $cli_cidade
 * @property string $cli_estado
 * @property string $created_at
 * @property string $updated_at
 * @property Usuario[] $usuarios
 */
class Clientes extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cli_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cli_nome', 'cli_idade', 'cep', 'cli_rua', 'cli_numero', 'cli_bairro', 'cli_cidade', 'cli_estado', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'usu_cli_id', 'cli_id');
    }
}
