<?php
namespace App\Http\Controllers\Admin\Parasut;

class Account extends Base
{
    public function create($data)
    {
        return $this->client->request(
            'contacts',
            $data,
            'POST'
        );
    }
}