<?php

namespace App\Models;

use CodeIgniter\Model;

class TourModel extends Model
{
    protected $table            = 'tour';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_wisata', 'description', 'location', 'price', 'available_seats', 'rating', 'image_url'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'price'      => 'float',
        'rating'     => 'float',
        'available_seats' => 'int',
    ];
    protected array $castHandlers = [];

    // Validation
    protected $validationRules = [
        'nama_wisata' => 'required',
        'description' => 'required',
        'location' => 'required',
        'price' => 'required|numeric',
        'available_seats' => 'required|integer',
        'rating' => 'required|numeric|less_than_equal_to[5.0]',
        'image_url' => 'permit_empty',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}