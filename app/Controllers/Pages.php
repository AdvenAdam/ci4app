<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Adve',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About '
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'tittle' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc no 231',
                    'kota' => 'boyolai'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl. DCB no. 17',
                    'kota' => 'Boyolali'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
