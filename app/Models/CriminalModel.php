<?php
namespace App\models;

use CodeIgniter\Model;
class CriminalModel extends model{
    protected $table = "criminals";
    protected $primaryKey = 'accuserId';
    protected $returnType = 'array';
    protected $allowedFields = ['fName', 'lName', 'locationArrested', 'circumstance', 'guardianName', 'age', 'bailset','charges', 'dateArrested'];

}