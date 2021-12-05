<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\HotelModel;

class Hotel extends Controller
{
    public function add()
    {   
        echo view('admin/hotel/add');
    }

    public function addProcess()
    {
        $model = new HotelModel;
        $data = array(
            'item_name' => $this->request->getPost('item_name'),
            'item_type'         => $this->request->getPost('item_type'),
            'item_city'  => $this->request->getPost('item_city'),
            'item_address'         => $this->request->getPost('item_address'),
            'item_price'  => $this->request->getPost('item_price'),
            'item_desc'  => $this->request->getPost('item_desc'),
            'item_facility'  => $this->request->getPost('item_facility'),
        );
        $model->add($data);
        echo '<script>
                alert("Data berhasil di tambahkan");
                window.location="'.base_url('/admin/hotel').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new HotelModel;
        $get = $model->get($id)->getRow();
        if(isset($get)){
            $data['item'] = $get;
            echo view('admin/hotel/edit', $data);
        }else{
            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }
    }

    public function editProcess()
    {
        $model = new HotelModel;
        $id = $this->request->getPost('id');
        $data = array(
            'item_name' => $this->request->getPost('item_name'),
            'item_type'         => $this->request->getPost('item_type'),
            'item_city'  => $this->request->getPost('item_city'),
            'item_address'         => $this->request->getPost('item_address'),
            'item_price'  => $this->request->getPost('item_price'),
            'item_desc'  => $this->request->getPost('item_desc'),
            'item_facility'  => $this->request->getPost('item_facility'),
        );
        $model->edit($data, $id);

        echo '<script>
            alert("Berhasil mengubah data");
            window.location="'.base_url('admin/hotel').'"
            </script>';
    }

    public function deleteData($id)
    {
        $model = new HotelModel;
        $get = $model->get($id)->getRow();
        if(isset($get))
        {
            $model->deleteData($id);
            echo '<script>
                    alert("Data berhasil di hapus");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }
    }

}