<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Livros_model;
use App\Libraries\MyPagerRenderer;


class Livro extends Controller
{
    protected $livrosModel;

    public function __construct()
    {
        $this->livrosModel = new Livros_model();
    }
    public function index(): string
    {

        $data['livros'] = $this->livrosModel->orderBy('DataCadastro', 'DESC')->paginate(3);

        $data['pager'] = $this->livrosModel->pager;

        return view('livros', $data);
    }

    public function add() 
    {
        $titulo = $this->request->getPost('titulo');
        $autor = $this->request->getPost('autor');
        $genero = $this->request->getPost('genero');
        $ano = $this->request->getPost('ano');
        $paginas_total = $this->request->getPost('total_paginas');
        $pagina_atual = $this->request->getPost('pagina_atual');
        $status = $this->request->getPost('status');

        if ($pagina_atual != 0 || $paginas_total != 0)
        {
            $porcentagem = round(($pagina_atual / $paginas_total) * 100);
        }
        else
        {
            $porcentagem = 0;
        }
        
        
        $dadosLivro = [
            'Titulo' => $titulo,
            'Autor' => $autor,
            'Genero' => $genero,
            'AnoPublicacao' => $ano,
            'StatusLeitura' => $status,
            'TotalPaginas' => $paginas_total,
            'PaginaAtual' => $pagina_atual,
            'PorcentagemLeitura' => $porcentagem,
            'DataCadastro' => date('Y-m-d H:i:s'),
        ];

        $this->livrosModel->insert($dadosLivro);
        return redirect()->to(base_url('/'));
    }

    public function get_by_id($id) 
    {
        $livro_details = $this->livrosModel->obter_livro_por_id($id);
        return $this->response->setJSON($livro_details);
    }

    public function edit()
    {
        if ($this->request->getMethod() === 'post') {

            $paginas_total = $this->request->getPost('total_paginas');
            $pagina_atual = $this->request->getPost('pagina_atual');
            if ($pagina_atual != 0 || $paginas_total != 0)
            {
                $porcentagem = round(($pagina_atual / $paginas_total) * 100);
            }
            else
            {
                $porcentagem = 0;
            }
           
            $livroId = (int)$this->request->getPost('id'); 
            $data = [
                'Titulo' => $this->request->getPost('titulo'),
                'Autor' => $this->request->getPost('autor'),
                'Genero' => $this->request->getPost('genero'),
                'AnoPublicacao' => $this->request->getPost('ano'),
                'TotalPaginas' => $this->request->getPost('total_paginas'),
                'PaginaAtual' => $this->request->getPost('pagina_atual'),
                'StatusLeitura' => $this->request->getPost('status'),
                'PorcentagemLeitura' => $porcentagem
            ];
    
            $this->livrosModel->atualizar_livro($livroId, $data);
            return redirect()->to(base_url('/'));
        }
    }

    public function delete()
    {
        $livroId = (int)$this->request->getPost('id'); 
        $this->livrosModel->excluir_livro($livroId);
        return redirect()->to('/')->with('success', 'Livro excluído com sucesso!');
    }
}
