<?php
namespace App\Models;

use CodeIgniter\Model;

class Livros_model extends Model {
    protected $table = 'livro';
    protected $primaryKey = 'ID';
    protected $returnType = 'object'; 
    protected $useTimestamps = false; 
    protected $allowedFields = [
        'Titulo',
        'Autor',
        'Genero',
        'AnoPublicacao',
        'StatusLeitura',
        'PaginaAtual',
        'TotalPaginas',
        'PorcentagemLeitura',
    ];

    public function obter_livros($perPage = 4)
    {
        return $this->paginate($perPage);
    }

    public function obter_livro_por_id($id) 
    {
        $query = $this->where('ID', $id)->get();
        return $query->getRowArray();
    }

    public function atualizar_livro($id, $data)
    {
        $this->set($data);
        $this->where('ID', $id);
        $this->update();
    }

    public function excluir_livro($id)
    {
        return $this->delete($id);
    }
}