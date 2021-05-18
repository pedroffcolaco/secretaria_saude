<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsuariosAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function(Blueprint $table) {
            $table->string('data')->nullable();
            $table->enum('periodo', ['manha','tarde','noite']);
            $table->string('ocorrido')->nullable();
            $table->string('feriado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('enderecoacidente')->nullable();
            $table->string('tipo_acidente')->nullable();
            $table->string('veiculo_acidente_vitima')->nullable();
            $table->string('veiculo_acidente_envolvido')->nullable();
            $table->string('paciente_envolvido')->nullable();
            $table->string('embriagues')->nullable();
            $table->string('vitima_fatal')->nullable();
            $table->string('numero_vitimas')->nullable();
            $table->string('numero_feridos')->nullable();
            $table->string('quadro_lesao')->nullable();
            $table->string('obito')->nullable();
            $table->string('resposnavel_apoio')->nullable();
            $table->string('nome_paciente')->nullable();
            $table->string('data_nascimento_paciente')->nullable();
            $table->string('idade_paciente')->nullable();
           // $table->string('nome_paciente')->nullable();
            $table->string('genero_paciente')->nullable();
            $table->string('filiacao_paciente')->nullable();
            $table->string('endereco_paciente')->nullable();
            $table->string('contato_autor')->nullable();
            $table->string('paciente_referenciado')->nullable();
            $table->string('hospital_direcionado')->nullable();
            $table->string('observacoes')->nullable();
            $table->string('instituicao')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('cargo_notificador')->nullable();
            $table->string('contato_notificador')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function(Blueprint $table) {

            $table->dropColumn([
                'data', 'periodo', 'ocorrido', 'feriado', 'municipio', 'enderecoacidente', 'tipo_acidente', 'veiculo_acidente_vitima',
                'paciente_envolvido', 'embriagues', 'vitima_fatal', 'numero_vitimas', 'numero_feridos', 'quadro_lesao', 'obito',
                'resposnavel_apoio', 'nome_paciente', 'data_nascimento_paciente', 'idade_paciente', 'genero_paciente', 'filiacao_paciente',
                'endereco_paciente','contato_autor','paciente_referenciado','hospital_direcionado','observacoes','instituicao','responsavel',
                'cargo_notificador','contato_notificador'
            ]);
        });
    }
}
