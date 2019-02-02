<?php

namespace gilvanturismo;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{

public $timestamps = false;

protected $fillable = array('nome', 'data_nascimento', 'endereco', 'numero', 'bairro', 'cidade', 'cep', 'complemento', 'estado_civil', 'rg', 'orgao_rg', 'uf_rg', 'cpf', 'pai', 'mae', 'email', 'telefone', 'telefone_resp', 'nacionalidade', 'raca', 'necessidades', 'necessidades_descricao', 'altura', 'peso', 'tipo_sangue', 'fator_rh', 'alergia', 'remedio', 'alergia_medicamento');


}
