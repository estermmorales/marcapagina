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

    public function obter_livros()
    {
        return $this->findAll();
    }
}