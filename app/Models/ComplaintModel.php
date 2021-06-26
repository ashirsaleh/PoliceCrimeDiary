<?php
namespace App\models;

use CodeIgniter\Model;
class ComplaintModel extends model{
    protected $table = "complaints";
    protected $primaryKey = 'complainer_id';
    protected $returnType = 'array';
    protected $allowedFields = ['Fname', 'Lname', 'address', 'date','p_number','time', 'nature_complaints','th_name','location','short_info','car_name','plate_number','color','wit_statement'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
}