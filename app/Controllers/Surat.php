<?php

namespace App\Controllers;

class Surat extends BaseController
{
    public function index()
    {

        $request = service('request');
        $accessToken = $request->getCookie('user');
        $accessToken = $accessToken;
        $dataToken = json_decode($accessToken);
        $dataUser = json_decode($dataToken);

        $jwtBearerToken = $dataUser->token;
        $url = 'https://api.bpkad.jatimprov.go.id/jual?bulan_awal=2023-07&bulan_akhir=2023-07&is_batal=false&id_pk=' . $dataUser->user->id_pk;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $jwtBearerToken
        ));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // Handle error if needed
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);


        $data = json_decode($response, true);


        // $builder = $this->db->table('dokumen_penetapan');
        // $query   = $builder->get()->getResult();
        // $data['dokumen_penetapan'] = $query;
        return view('surat/dokumenPenetapan/dokumen-penetapan', [
            'dokumen_penetapan' => $data['jual']
        ]);
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

    public function editDokumenPenetapan($id)
    {
        if ($id != null) {
            // $query = $this->db->table('dokumen_penetapan')->getWhere(['id_penetapan' => $id]);
            $request = service('request');
            $accessToken = $request->getCookie('user');
            $accessToken = $accessToken;
            $dataToken = json_decode($accessToken);
            $dataUser = json_decode($dataToken);

            $jwtBearerToken = $dataUser->token;
            $url = 'https://api.bpkad.jatimprov.go.id/jual/' . $id;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $jwtBearerToken
            ));

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                // Handle error if needed
                echo 'Curl error: ' . curl_error($ch);
            }

            curl_close($ch);


            $data = json_decode($response, true);

            echo view('surat/dokumenPenetapan/edit-dokumen-penetapan', [
                "dokumen_penetapan" => $data['jual']
            ]);
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
