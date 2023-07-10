<?php

namespace App\Controllers;

class Pengukuran extends BaseController
{
    public function index()
    {
        return view('surat/jenisPengukuran/jenis-pengukuran');
    }

    public function createPengukuran()
    {
        return view('surat/jenisPengukuran/tambah-jenis-pengukuran');
    }

    public function addPengukuran()
    {
        $data = $this->request->getPost();

        $this->db->table('dokumen_penetapan')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil disimpan!');
        }
    }
}
