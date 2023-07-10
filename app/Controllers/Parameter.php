<?php

namespace App\Controllers;

class Parameter extends BaseController
{
    public function index()
    {
        return view('surat/parameter/parameter');
    }

    public function createParameter()
    {
        return view('surat/parameter/tambah-parameter');
    }

    public function addParameter()
    {
        $data = $this->request->getPost();

        $this->db->table('dokumen_penetapan')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil disimpan!');
        }
    }
}
