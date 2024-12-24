<?php
namespace App\Services\Interfaces;
use Illuminate\Http\Request;

interface NewsServiceInterface
{
    public function getById($id);


    public function update(int $id,Request $request);


    public function create(array $data);

    public function getAll();

    public function delete(int $id);

}
