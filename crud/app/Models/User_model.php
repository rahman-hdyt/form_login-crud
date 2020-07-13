<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class User_model extends Model
{
    protected $table = 'tuser';
 
    public function getUser()
    {
        $builder = $this->db->table('tuser');
        $builder->select('*');
        return $builder->get();
    }

    public function saveUser($data){
        $query = $this->db->table('tuser')->insert($data);
        return $query;
    }
 
    public function updateUser($data, $id)
    {
        $query = $this->db->table('tuser')->update($data, array('user_id' => $id));
        return $query;
    }
 
    public function deleteUser($id)
    {
        $query = $this->db->table('tuser')->delete(array('user_id' => $id));
        return $query;
    } 
 
   
}