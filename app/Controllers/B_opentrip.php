<?php

namespace App\Controllers;

use App\Models\OpentripModel;

class B_opentrip extends BaseController
{
    protected $opentripModel;

    public function __construct()
    {
        $this->model = new OpentripModel();
        helper('form'); 
    }
    public function index()
    {
        $data = [
            'opentrip' => $this->model->findAll()
        ];
        
        return view('B_opentrip/index', $data);
    }
    public function add_data()
    {           
                $inserted = [
                    'tujuan_opentrip' => $this->request->getPost('tujuan_opentrip'),
                    'tarif_opentrip' => $this->request->getPost('tarif_opentrip'),
                    'kuota_opentrip' => $this->request->getPost('kuota_opentrip'),
                ];

                $this->model->insert($inserted);
                return redirect()->to('/B_opentrip');
    }

    public function delete_data($id)
    {
        $photoId = $this->model->find($id);
        // unlink('photos/'.$photoId['photo']);
        $this->model->delete($id);
        return redirect()->to('/B_opentrip');
    }

    
}