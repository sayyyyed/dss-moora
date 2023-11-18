<?php

namespace App\Controllers;
use App\Models\DataModel;
class Home extends BaseController
{
    public function index()
    {
        echo view('welcome');
        // echo view('index');
        // $count = new DataModel();
        // $data['crt'] = $count->dataKriteriaCounter();
        // $data['loc'] = $count->dataLocationCounter();
        // $data['num'] = $count->dataNumCounter();
      
        // echo view('dashboard', $data);
    }
    public function anggota()
    {
        
        echo view('index');
        echo view('member');
        // $count = new DataModel();
        // $data['crt'] = $count->dataKriteriaCounter();
        // $data['loc'] = $count->dataLocationCounter();
        // $data['num'] = $count->dataNumCounter();
      
        // echo view('dashboard', $data);
    }

    public function dashboard()
    {
        // echo view('welcome');
        echo view('index');
        $count = new DataModel();
        $data['crt'] = $count->dataKriteriaCounter();
        $data['loc'] = $count->dataLocationCounter();
        $data['num'] = $count->dataNumCounter();
      
        echo view('dashboard', $data);
    }

    public function view_criteria()
    {
        $data = new DataModel();
        $dataCriteria = $data->showCriteria();
        $data = array(
            'criteria' => $dataCriteria,
        );
        echo view('index');
        echo view('criteria_table', $data);

    }
    public function view_location()
    {
        $data = new DataModel();
        $dataCriteria = $data->showLocation();
        $data = array(
            'location' => $dataCriteria,
        );
        echo view('index');
        echo view('location_table', $data);

    }

    public function view_normalization()
    {
        $dataModel = new DataModel();
        $dataCriteria = $dataModel->showLocation();
        $dataSqrt = $dataModel->showNorm();
    
        $data = array(
            'location' => $dataCriteria,
            'square' => $dataSqrt,
        );
    
        echo view('index');
        echo view('normalisasi_table', $data);
    }

    public function view_optimization()
    {
        $dataModel = new DataModel();
        $dataCriteria = $dataModel->showLocation();
        $dataSqrt = $dataModel->showNorm();
    
        $data = array(
            'location' => $dataCriteria,
            'square' => $dataSqrt,
        );
    
        echo view('index');
        echo view('optimasi_table', $data);
    }

    public function view_pembobotan()
    {
        $dataModel = new DataModel();
        $dataCriteria = $dataModel->showLocation();
        $dataSqrt = $dataModel->showNorm();
        $dataBobot = $dataModel->bobot();
    
        $data = array(
            'location' => $dataCriteria,
            'square' => $dataSqrt,
            'bobot' => $dataBobot,
        );
    
        echo view('index');
        echo view('pembobotan_table', $data);
    }
    public function view_perangkingan()
    {
        $dataModel = new DataModel();
        $dataCriteria = $dataModel->showLocation();
        $dataSqrt = $dataModel->showNorm();
        $dataBobot = $dataModel->bobot();
    
        $data = array(
            'location' => $dataCriteria,
            'square' => $dataSqrt,
            'bobot' => $dataBobot,
        );
    
        echo view('index');
        echo view('perangkingan_table', $data);
    }
    
    
    public function view_num()
    {
        $data = new DataModel();
        $dataCriteria = $data->showNum();
        $data = array(
            'num' => $dataCriteria,
        );
        echo view('index');
        echo view('numerisasi_table', $data);

    }

}
