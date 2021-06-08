<?php 
namespace App\validation;
use App\Models\AuthModel;

class UserRules{

    public function validateUser(string $str, string $fields, array $data){
        $model = new AuthModel();
        $user = $model->where('policeNo', $data['policeNo'])->first();

        if(!$user){
            return false;
        }
        return password_verify($data['password'], $user['password']);
    }
}
?>