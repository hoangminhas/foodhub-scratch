<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseModel
{
    public $table;

    public function getAll()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function getById($id)
    {
        $data = DB::table($this->table)->where('id', $id)->first();
        return $data;
    }

    public function deleteById($id)
    {
        DB::table($this->table)->where('id', $id)->delete();
    }
}
