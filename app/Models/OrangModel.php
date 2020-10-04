<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'orang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keywoard)
    {
        // $builder = $this->table('orang');
        // $builder = $this->like('nama', $keywoard);
        // return $builder;

        return $this->table('orang')->like('nama', $keywoard)->orLike('alamat', $keywoard);
    }
}
