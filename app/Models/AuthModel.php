<?php
namespace App\models;

use CodeIgniter\Model;

class AuthModel extends Model{
    protected $table = "users";
    protected $primarykey = 'policeId';
    protected $returnType = 'array';
    protected $allowedFields = ['policeId', 'policeNo', 'password','Fname', 'Lname', 'rank', 'age'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHas($data);
        $data['data']['updated_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}

?>