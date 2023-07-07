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

    public function editDokumenPenetapan($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('dokumen_penetapan')->getWhere(['id_penetapan' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dokumen_penetapan'] = $query->getRow();
                echo view('surat/dokumenPenetapan/edit-dokumen-penetapan', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function updateDokumenPenetapan($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('dokumen_penetapan')->where(['id_penetapan' => $id])->update($data);
        return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil diupdate!');
    }

    public function deleteDokumenPenetapan($id)
    {
        $this->db->table('dokumen_penetapan')->where(['id_penetapan' => $id])->delete();
        return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil dihapus!');
    }
}
