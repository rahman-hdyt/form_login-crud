<?php
namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'email';
    protected $allowedFields = ['firstname', 'lastname', 'email',
    'password', 'date_update'];

    public function getUser()
    {
       if($email === false)
       {
            return $this->findAll();
       }
       return $this->getWhere(['user_id'=>$email]);
    }
 
    public function saveUser($data){
        $query = $this->db->table('user')->insert($data);
        return $query;
    }
 
    public function updateUser($data, $email)
    {
        $query = $this->db->table('user')->update($data, array('email' => $email));
        return $query;
    }
 
    public function deleteUser($email)
    {
        $query = $this->db->table('user')->delete(array('email' => $email));
        return $query;
    } 
}