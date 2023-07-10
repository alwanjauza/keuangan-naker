<?php

namespace App\Controllers;

class Preorder extends BaseController
{
    public function index()
    {
        return view('surat/preorder/preorder');
    }

    public function editPreorder()
    {
        return view('surat/preorder/edit-preorder');
        // if ($id != null) {
        //     $query = $this->db->table('preorder')->getWhere(['id_preorder' => $id]);
        //     if ($query->resultID->num_rows > 0) {
        //         $data['preorder'] = $query->getRow();
        //         echo view('surat/preorder/edit-preorder', $data);
        //     } else {
        //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        //     }
        // } else {
        //     throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        // }
    }

    public function updateDokumenPenetapan($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('dokumen_penetapan')->where(['id_penetapan' => $id])->update($data);
        return redirect()->to(site_url('dokumen-penetapan'))->with('success', 'Data berhasil diupdate!');
    }
}
