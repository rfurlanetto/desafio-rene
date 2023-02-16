<?php

namespace App\Models;

use App\Lib\DB;
use App\Lib\Util;
use Exception;

class Produto
{
    public static function listar($id=null)
    {
        $db = new DB();

        try {

            if($id) {
                // Faz a consulta
                $query = $db->query(
                    "SELECT * FROM produto WHERE id = $id"
                );

                return $query->fetchAll();
            }else{
                // Faz a consulta
                $query = $db->query(
                    'SELECT * FROM produto ORDER BY id DESC'
                );

                return $query->fetchAll();

            }
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public static function salvar($data)
    {
        try {

            $db = new DB();

            $data['valor']  = (float)Util::formatMoney($data['valor'],"en");
            $data['categoria'] = (int)$data['categoria'];
            
            $db->insert('produto',
                        "titulo, valor, sku, quantidade, descricao, categoria_id",
                        "'{$data['titulo']}', {$data['valor']}, '{$data['sku']}', '{$data['quantidade']}', '{$data['descricao']}', {$data['categoria']}"
            );

        }catch (Exception $e){
            echo $e->getMessage();

        }

    }

    public static function atualizar($data)
    {
        try {
            $db = new DB();

            $id = $data['id'];

            $data['valor']  = (float)Util::formatMoney($data['valor'],"en");
            $data['categoria'] = (int)$data['categoria'];

            $db->update('produto',
                "titulo = '{$data['titulo']}', valor = {$data['valor']}, sku = '{$data['sku']}', quantidade = '{$data['quantidade']}', descricao = '{$data['descricao']}', categoria_id = {$data['categoria']}
                WHERE id = {$id}");

        }catch (Exception $e){
            echo $e->getMessage();

        }

    }

    public static function excluir($id)
    {
        try {
            $db = new DB();

            $db->delete('produto',"id = $id");

        }catch (Exception $e){
            exit($e->getMessage());

        }

    }

}