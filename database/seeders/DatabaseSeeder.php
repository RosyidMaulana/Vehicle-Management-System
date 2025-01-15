<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Karyawan;
use App\Models\Kendaraan;
use App\Models\UnitKerja;
use Illuminate\Database\Seeder;
use App\Models\ApproverPeminjaman;
use App\Models\AdminPengelolaKenedaraan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seed Unit Kerja
        UnitKerja::create([
            'kode_unit_kerja' => 'UK001',
            'nama_unit_kerja' => 'Kantor Pusat',
            'lokasi' => 'Jakarta',
        ]);

        UnitKerja::create([
            'kode_unit_kerja' => 'UK002',
            'nama_unit_kerja' => 'Kantor Cabang',
            'lokasi' => 'Bandung',
        ]);

        UnitKerja::create([
            'kode_unit_kerja' => 'UK003',
            'nama_unit_kerja' => 'Tambang 1',
            'lokasi' => 'Surabaya',
        ]);

        UnitKerja::create([
            'kode_unit_kerja' => 'UK004',
            'nama_unit_kerja' => 'Tambang 2',
            'lokasi' => 'Medan',
        ]);

        UnitKerja::create([
            'kode_unit_kerja' => 'UK005',
            'nama_unit_kerja' => 'Tambang 3',
            'lokasi' => 'Yogyakarta',
        ]);

        UnitKerja::create([
            'kode_unit_kerja' => 'UK006',
            'nama_unit_kerja' => 'Tambang 4',
            'lokasi' => 'NTB',
        ]);
        UnitKerja::create([
            'kode_unit_kerja' => 'UK007',
            'nama_unit_kerja' => 'Tambang 5',
            'lokasi' => 'Papua',
        ]);
        UnitKerja::create([
            'kode_unit_kerja' => 'UK008',
            'nama_unit_kerja' => 'Tambang 6',
            'lokasi' => 'Kalimantan',
        ]);

        // Seed Karyawan
        Karyawan::create([
            'kode_karyawan' => 'K001',
            'nama' => 'Juleha',
            'bagian' => 'keuangan',
            'jabatan' => 'Staf Departemen Keuangan',
            'no_tlp' => '081234567890',
            'kode_unit_kerja' => 'UK001',
        ]);

        Karyawan::create([
            'kode_karyawan' => 'K002',
            'nama' => 'Riyadi',
            'bagian' => 'Pengelola Kendaraan',
            'jabatan' => 'Kepala Bagian Pengelola Kendaraan',
            'no_tlp' => '081234567891',
            'kode_unit_kerja' => 'UK001',
        ]);

        Karyawan::create([
            'kode_karyawan' => 'K003',
            'nama' => 'Sugeng',
            'bagian' => 'karyawan',
            'jabatan' => 'Operator',
            'no_tlp' => '081234567892',
            'kode_unit_kerja' => 'UK003',
        ]);

        Karyawan::create([
            'kode_karyawan' => 'K004',
            'nama' => 'Fery',
            'bagian' => 'karyawan',
            'jabatan' => 'Operator',
            'no_tlp' => '081234567893',
            'kode_unit_kerja' => 'UK004',
        ]);

        Karyawan::create([
            'kode_karyawan' => 'K005',
            'nama' => 'Harry',
            'bagian' => 'karyawan',
            'jabatan' => 'Operator',
            'no_tlp' => '081234567894',
            'kode_unit_kerja' => 'UK005',
        ]);

        //User Auth
        AdminPengelolaKenedaraan::create([
            'id_admin' => 'PX001',
            'username' => 'Rosyid',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'kode_unit_kerja' => 'UK003'
        ]);

        ApproverPeminjaman::create([
            'kode_approver' => 'AP002',
            'email' => 'approver2@example.com',
            'password' => bcrypt('password'),
            'kode_karyawan' => 'K002',
            'level' => 1
        ]);

        ApproverPeminjaman::create([
            'kode_approver' => 'AP001',
            'email' => 'approver1@example.com',
            'password' => bcrypt('password'),
            'kode_karyawan' => 'K001',
            'level' => 2
        ]);

        // Seed Kendaraan
        Kendaraan::create([
            'no_polisi' => 'B1234XYZ',
            'jenis' => 'Angkutan Orang',
            'harga_bbm' => '15000',
            'jadwal_service' => '2025-06-01',
        ]);

        Kendaraan::create([
            'no_polisi' => 'B5678ABC',
            'jenis' => 'Angkutan Orang',
            'harga_bbm' => '14000',
            'jadwal_service' => '2025-07-01',
        ]);

        Kendaraan::create([
            'no_polisi' => 'B9101DEF',
            'jenis' => 'Angkutan Barang',
            'harga_bbm' => '20000',
            'jadwal_service' => '2025-08-01',
        ]);

        Kendaraan::create([
            'no_polisi' => 'B1123GHI',
            'jenis' => 'Angkutan Barang',
            'harga_bbm' => '25000',
            'jadwal_service' => '2025-09-01',
        ]);

        Kendaraan::create([
            'no_polisi' => 'B1415JKL',
            'jenis' => 'Angkutan Barang',
            'harga_bbm' => '25000',
            'jadwal_service' => '2025-10-01',
        ]);
    }
}
