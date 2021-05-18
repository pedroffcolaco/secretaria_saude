<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name',
        'email',
        'data',
        'periodo',
        'ocorrido',
        'feriado',
        'municipio',
        'enderecoacidente',
        'tipo_acidente',
        'veiculo_acidente_vitima',
        'paciente_envolvido',
        'embriagues',
        'vitima_fatal',
        'numero_vitimas',
        'numero_feridos',
        'quadro_lesao',
        'obito',
        'resposnavel_apoio',
        'nome_paciente',
        'data_nascimento_paciente',
        'idade_paciente',
        'genero_paciente',
        'filiacao_paciente',
        'endereco_paciente',
        'contato_autor',
        'paciente_referenciado',
        'hospital_direcionado',
        'observacoes',
        'instituicao',
        'responsavel',
        'cargo_notificador',
        'contato_notificador'

    ];
}
