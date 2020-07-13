<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\User_model;
 
class User_login extends Controller
{
    public function index()
    {
        $model = new User_model();
        $data['tuser']  = $model->getUser()->getResult();
        echo view('user_view', $data);
    }
 
    public function save()
    {
        $model = new User_model();
        $data = array(  
            'u_id'         => $this->request->getPost('u_id'),
            'user_name'       => $this->request->getPost('user_name'),
            'email'           => $this->request->getPost('email'),
        );
        $model->saveUser($data);
        return redirect()->to(base_url('user_login'));
    }
 
    public function update()
    {
        $model = new User_model();
        $id = $this->request->getPost('user_id');
        $data = array(
            'u_id'        => $this->request->getPost('u_id'),
            'user_name'       => $this->request->getPost('user_name'),
            'email' => $this->request->getPost('email'),
        );
        $model->updateUser($data, $id);
        return redirect()->to(base_url('user_login'));
    }
 
    public function delete()
    {
        $model = new User_model();
        $id = $this->request->getPost('user_id');
        $model->deleteUser($id);
        return redirect()->to(base_url('user_login'));
    }
 
}