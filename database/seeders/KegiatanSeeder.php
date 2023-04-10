<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->truncate();
        $data = [
            [
                'id' => '1',
                'nama_kegiatan' => 'Input data bencana'
            ],
            [
                'id' => '2',
                'nama_kegiatan' => 'Entri SPP, SPM'
            ],
            [
                'id' => '3',
                'nama_kegiatan' => 'Membuat bahan sosial media (instagram, Website)'
            ],
            [
                'id' => '4',
                'nama_kegiatan' => 'Posting media sosial'
            ],
            [
                'id' => '5',
                'nama_kegiatan' => 'Mempersiapkan bahan SPJ'
            ],
            [
                'id' => '6',
                'nama_kegiatan' => 'Membuat BAST logistik'
            ],
            [
                'id' => '7',
                'nama_kegiatan' => 'Membuat surat rekomendasi terkait bencana'
            ],
            [
                'id' => '8',
                'nama_kegiatan' => 'Membuat surat keluar'
            ],
            [
                'id' => '9',
                'nama_kegiatan' => 'Membuat laporan KPKPA ex POBL'
            ],
            [
                'id' => '10',
                'nama_kegiatan' => 'Input data pengeluaran, pemasukan dan ketersediaan logistik di gudang'
            ],
            [
                'id' => '11',
                'nama_kegiatan' => 'Agendaris Surat masuk '
            ],
            [
                'id' => '12',
                'nama_kegiatan' => 'Koordinasi terkait informasi bencana'
            ],
            [
                'id' => '13',
                'nama_kegiatan' => 'Mengikuti rapat'
            ],
            [
                'id' => '14',
                'nama_kegiatan' => 'Konsultasi dengan atasan'
            ],
            [
                'id' => '15',
                'nama_kegiatan' => 'Mengikuti apel'
            ],
            [
                'id' => '16',
                'nama_kegiatan' => 'Mengikuti upacara'
            ],
            [
                'id' => '17',
                'nama_kegiatan' => 'Asesment bencana'
            ],
            [
                'id' => '18',
                'nama_kegiatan' => 'Melakukan pencatatan dan pendataan kejadian bencana'
            ],
            [
                'id' => '19',
                'nama_kegiatan' => 'Melaksanakan pencatatan dan pendataan penyaluran logistik untuk korban bencana dan kebakaran'
            ],
            [
                'id' => '20',
                'nama_kegiatan' => 'Melaksanakan inventarisir kondisi peralatan dan kendaraan kebencanaan dan kebakaran'
            ],
            [
                'id' => '21',
                'nama_kegiatan' => 'Melakukan asesmen kaji cepat kejadian bencana dan kebakaran'
            ],
            [
                'id' => '22',
                'nama_kegiatan' => 'Melakukan operasi penanggulangan bencana dan kebakaran'
            ],
            [
                'id' => '23',
                'nama_kegiatan' => 'Melaksanakan evakuasi bencana dan kebakaran'
            ],
            [
                'id' => '24',
                'nama_kegiatan' => 'Melakukan koordinasi terkait informasi kejadian bencana dan kebakaran '
            ],
            [
                'id' => '25',
                'nama_kegiatan' => 'Sosialisasi pencegahan dan pengendalian bencana dan kebakaran'
            ],
            [
                'id' => '26',
                'nama_kegiatan' => 'Piket jaga kebencanaan'
            ],
            [
                'id' => '27',
                'nama_kegiatan' => 'Pengecekan peralatan dan kendaraan operasi bencana dan kebakaran'
            ],
            [
                'id' => '28',
                'nama_kegiatan' => 'Menerima laporan kejadian bencana dan kebakaran'
            ],
            [
                'id' => '29',
                'nama_kegiatan' => 'Melaksanakan operasi evakuasi sarang tawon, ular dan zat berbahaya lainnya'
            ],
            [
                'id' => '30',
                'nama_kegiatan' => 'Melaksanakan pengiriman bantuan logistik untuk korban bencana dan kebakaran'
            ],
            [
                'id' => '31',
                'nama_kegiatan' => 'Narasumber pelatihan pencegahan dan pengendalian bencana dan kebakaran'
            ],
            
            [
                'id' => '32',
                'nama_kegiatan' => 'Rekapitulasi data'
            ],
            [
                'id' => '33',
                'nama_kegiatan' => 'Melakukan kerja bakti di lingkungan kantor'
            ],
            [
                'id' => '34',
                'nama_kegiatan' => 'Mengecek kendaraan'
            ],
            [
                'id' => '35',
                'nama_kegiatan' => 'Penyusunan KAK, HPS dan spesifikasi pengadaan barang'
            ],
            [
                'id' => '36',
                'nama_kegiatan' => 'Koordinasi dengan OPD lain'
            ],
            [
                'id' => '37',
                'nama_kegiatan' => 'Melakukan evakuasi korban kecelakaan/ bencana/ kejadian berbahaya lainya'
            ],
            [
                'id' => '38',
                'nama_kegiatan' => 'Menerima dan memfasilitasi kunjungan lembaga pendidikan (TK/paud/anak sekolah)'
            ],
            [
                'id' => '39',
                'nama_kegiatan' => 'Pengecekan proteksi kebakaran (apar/Hydrant)'
            ],
            [
                'id' => '40',
                'nama_kegiatan' => 'Mengindentifikasi dan menganalisa kebutuhan ase'
            ],
            [
                'id' => '41',
                'nama_kegiatan' => 'Melaksanakan simulasi bencana'
            ],
            [
                'id' => '42',
                'nama_kegiatan' => 'Melaksanakan Penanganan keadaan darurat / bencana'
            ],
            [
                'id' => '43',
                'nama_kegiatan' => 'Menyimpan logistik'
            ],
            [
                'id' => '44',
                'nama_kegiatan' => 'Mendistribusikan logistik'
            ],
            [
                'id' => '45',
                'nama_kegiatan' => 'Menyiapkan dokumen rekon aset input persediaan di aplikasi sibapers'
            ],
            [
                'id' => '46',
                'nama_kegiatan' => 'Membuat surat pernyataan bencana tanda tangan Bupati'
            ],
            [
                'id' => '47',
                'nama_kegiatan' => 'Menyiapkan dan mempersiapkan kegiatan dan acara'
            ],
            [
                'id' => '48',
                'nama_kegiatan' => 'Setting jadwal piket'
            ],
            [
                'id' => '49',
                'nama_kegiatan' => 'Mempersiapkan bahan SPJ'
            ],
            [
                'id' => '50',
                'nama_kegiatan' => 'Mengeset / Merapikan dokumen '
            ]
        ];

        foreach ($data as $datum) {
            Kegiatan::create($datum);
        }
    }
}
