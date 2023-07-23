<?php

namespace App\Controllers;

class STS extends BaseController
{
    public function index()
    {
        $request = service('request');
        $accessToken = $request->getCookie('user');
        $accessToken = $accessToken;
        $dataToken = json_decode($accessToken);
        $dataUser = json_decode($dataToken);

        $jwtBearerToken = $dataUser->token;
        $url = 'https://api.bpkad.jatimprov.go.id/terima?bulan_awal=2023-07&bulan_akhir=2023-07&id_jenis=1&id_pk=' . $dataUser->user->id_pk;

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

        return view('surat/sts', [
            'dokumen_penetapan' => $data['terima']
        ]);
    }
}
