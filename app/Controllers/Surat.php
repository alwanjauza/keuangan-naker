<?php

namespace App\Controllers;

class Surat extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('dokumen_penetapan');
        $query   = $builder->get()->getResult();
        $data['dokumen_penetapan'] = $query;
        return view('surat/dokumenPenetapan/dokumen-penetapan', $data);
    }

    public function createDokumenPenetapan()
    {
        return view('surat/dokumenPenetapan/tambah-dokumen-penetapan');
    }

    public function addDokumenPenetapan()
    {
        $data = $this->request->getPost();

        $this->db->table('dokumen_penetapan')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil disimpan!');
        }
    }
}
