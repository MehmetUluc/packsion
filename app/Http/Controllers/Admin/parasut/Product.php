<?php
namespace App\Http\Controllers\Admin\Parasut;

class Product extends Base
{

    public function create($data)
    {
        return $this->client->request(
            'products',
            $data
        );
    }
}