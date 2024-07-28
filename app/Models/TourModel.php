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
    protected $validationRules      = [
        'nama_wisata' => 'required|min_length[3]|max_length[255]',
        'description' => 'required',
        'location' => 'required|max_length[255]',
        'price' => 'required|decimal',
        'available_seats' => 'required|integer',
        'image_url' => 'required|valid_url', 
        'rating' => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[5]',
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