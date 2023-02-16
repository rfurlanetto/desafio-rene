<?php

namespace App\Models;

use App\Lib\DB;
use App\Lib\Util;
use Exception;

class Categoria
{

    public static function listar($id=null)
    {
        $db = new DB();

        try {

            if($id) {
                // Faz a consulta
                $query = $db->query(
                    "SELECT * FROM categoria WHERE id = $id"
                );

                return $query->fetch();
            }else{
                // Faz a consulta
                $query = $db->query(
                    'SELECT * FROM categoria ORDER BY id DESC'
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

            $db->insert('categoria',
                        "codigo, categoria",
                        "'{$data['codigo']}', '{$data['categoria']}'"
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

            $db->update('categoria',
                "codigo = '{$data['codigo']}', categoria = '{$data['categoria']}' WHERE id = {$id}");

        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public static function excluir($id)
    {
        try {
            $db = new DB();

            $db->delete('categoria',"id = $id");

        }catch (Exception $e){
            exit($e->getMessage());

        }

    }

}