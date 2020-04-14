<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\FlowerModel;
 
class FlowerController extends Controller
{
    public function index()
    {    
        $model = new FlowerModel();
 
        $data['flowers'] = $model->orderBy('nume', 'ASC')->findAll();
        
        return view('flowers_view', $data);
    }    
}
