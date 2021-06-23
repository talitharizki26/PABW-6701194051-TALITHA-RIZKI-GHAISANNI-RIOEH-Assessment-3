<?php

namespace App\Models;

use CodeIgniter\Model;

class OpentripModel extends Model
{
    protected $table         = 'opentrip';
    protected $primaryKey    = 'id_opentrip';
    protected $returnType    = 'array';
    protected $allowedFields = ['tujuan_opentrip', 'tarif_opentrip', 'kuota_opentrip', 'foto_opentrip'];
    protected $useTimestamps = true;

}