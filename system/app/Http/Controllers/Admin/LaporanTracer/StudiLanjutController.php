<?php

namespace App\Http\Controllers\Admin\LaporanTracer;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\TracerStudy;
use Illuminate\Http\Request;

class StudiLanjutController extends Controller
{
    public function alasanStudi()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();
        
        $data['menemukan'] = TracerStudy::where('id_soal', '9725e931-ba39-45fb-b6e1-bf55f9a59739')->count();
        $data['pengambangan_diri'] = TracerStudy::where('id_soal', '9725e940-a550-4afe-9c0a-2dfc859f65a5')->count();
        $data['karir'] = TracerStudy::where('id_soal', '9725e94b-0ea9-4d2a-b541-57333b2e4f2e')->count();
        $data['lainnya'] = TracerStudy::where('id_soal', '9725e95f-dfa5-4e74-b294-a2ed2ac39d0f')->count();

        $list_id_soal = [
            'Menemukan pekerjaan yang memuaskan/sesuai harapan' => '9725e931-ba39-45fb-b6e1-bf55f9a59739',
            'Pengembangan diri' => '9725e940-a550-4afe-9c0a-2dfc859f65a5',
            'Karir dimasa depan' => '9725e94b-0ea9-4d2a-b541-57333b2e4f2e',
            'Lainnya' => '9725e95f-dfa5-4e74-b294-a2ed2ac39d0f'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');
        
        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.studi-lanjut.alasan-studi-lanjut', $data);
    }

    public function biaya()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();
        
        $data['sendiri'] = TracerStudy::where('id_soal', '9725e8af-fafa-4ccb-a72a-097f301771cd')->count();
        $data['beasiswa'] = TracerStudy::where('id_soal', '9725e8bb-b0dd-4dfe-b245-86bbfd0f2703')->count();

        $list_id_soal = [
            'Sendiri/Mandiri' => '9725e8af-fafa-4ccb-a72a-097f301771cd',
            'Beasiswa' => '9725e8bb-b0dd-4dfe-b245-86bbfd0f2703'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');
        
        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.studi-lanjut.biaya', $data);
    }

    public function jenjangStudi()  {
        

        $data['bekerja'] = TracerStudy::where('id_soal', '971ae197-887f-4fd9-9f89-0f8db794e109')->count();
        $data['wiraswasta'] = TracerStudy::where('id_soal', '971ae1b0-c858-44e7-a85a-c0ad9d82a35f')->count();
        $data['studi_lanjut'] = TracerStudy::where('id_soal', '971ae1e8-e204-4e4f-b06d-8485167b87f9')->count();
        $data['belum_bekerja'] = TracerStudy::where('id_soal', '971ae1f7-faec-4131-a19d-60953b698f8c')->count();
        
        $data['D_4'] = TracerStudy::where('id_soal', '9725e7fd-4b73-4c12-842e-3b4dc09c1715')->count();
        $data['S_1'] = TracerStudy::where('id_soal', '9725e80c-0a01-4859-ba15-784498765293')->count();

        $list_id_soal = [
            'D-IV' => '9725e7fd-4b73-4c12-842e-3b4dc09c1715',
            'S-1' => '9725e80c-0a01-4859-ba15-784498765293'
        ];

        $list_tahun_lulus = Mahasiswa::groupBy('tahun_lulus')->pluck('tahun_lulus');
        
        $list_soal = [];

        foreach ($list_id_soal as $label => $id_soal) {
            $list_soal[] = [
                'label' => $label,
                'model' => TracerStudy::where('id_soal', $id_soal)->get()
            ];
        }

        $data['list_tahun'] = [];
        foreach ($list_tahun_lulus as $tahun_lulus) {
            foreach ($list_soal as $soal) {
                $data['list_tahun'][$tahun_lulus][] = [
                    'label' => $soal['label'],
                    'count' => $soal['model']->where('mahasiswa.tahun_lulus', $tahun_lulus)->count()
                ];
            }
        }

        krsort($data['list_tahun']);

        return view('admin.laporan-tracer.studi-lanjut.jenjang-studi-lanjut', $data);
    }
}
