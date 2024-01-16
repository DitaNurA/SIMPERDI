<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DataBiayaController;
use App\Http\Controllers\BiayaRepresentasiController;
use App\Http\Controllers\UangHarianController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\SpjController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\SuratTugasDalamController;
use App\Http\Controllers\CetakDalamController;
use App\Http\Controllers\DetailDalamController;
use App\Http\Controllers\SppdDalamController;
use App\Http\Controllers\RincianSppdController;
use App\Http\Controllers\SpjDalamController;
use App\Http\Controllers\RincianSppdDalamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register' => true]);
// Homepage
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'admin'], function() {
/**Route::get('/halaman_admin','adminController@index')
->name('admin_index');
Route::get('/admin','adminController@index')
->name('dashboard');**/

//pegawai
Route::prefix('kelola_pegawai')->group(function () {
    Route::get('index', [PegawaiController::class, 'index'])->name('kelola_pegawai');
    Route::get('tambah', [PegawaiController::class, 'create'])->name('pegawai_tambah');
    Route::POST('ajax', [PegawaiController::class, 'ajax'])->name('ajax_golongan');
    Route::POST('tambah', [PegawaiController::class, 'store'])->name('proses_pegawai_tambah');
    Route::get('edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai_edit');
    Route::POST('edit/{id}', [PegawaiController::class, 'update'])->name('proses_pegawai_edit');
    Route::DELETE('delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai_delete');
});


//Kelola Akun
Route::prefix('kelola_akun')->group(function () {
    Route::get('index', [KelolaAkunController::class, 'index'])->name('kelola_akun');
    Route::get('tambah', [KelolaAkunController::class, 'create'])->name('akun_tambah');
    Route::POST('tambah', [KelolaAkunController::class, 'store'])->name('proses_akun_tambah');
    Route::get('edit/{id}', [KelolaAkunController::class, 'edit'])->name('akun_edit');
    Route::POST('edit/{id}', [KelolaAkunController::class, 'update'])->name('proses_akun_edit');
    Route::DELETE('delete/{id}', [KelolaAkunController::class, 'destroy'])->name('akun_delete');
});


//Kepala Dinas
Route::prefix('kelola_kepala_dinas')->group(function () {
    Route::get('index', [KepalaDinasController::class, 'index'])->name('kelola_kepala_dinas');
    Route::get('tambah', [KepalaDinasController::class, 'create'])->name('kepala_dinas_tambah');
    Route::POST('ajax', [KepalaDinasController::class, 'ajax'])->name('ajax_golongan_kepala_dinas');
    Route::POST('tambah', [KepalaDinasController::class, 'store'])->name('proses_kepala_dinas_tambah');
    Route::get('edit/{id}', [KepalaDinasController::class, 'edit'])->name('kepala_dinas_edit');
    Route::POST('edit/{id}', [KepalaDinasController::class, 'update'])->name('proses_kepala_dinas_edit');
    Route::DELETE('delete/{id}', [KepalaDinasController::class, 'destroy'])->name('kepala_dinas_delete');
});

//Data Jabatan
Route::prefix('kelola_jabatan')->group(function () {
    Route::get('index', [JabatanController::class, 'index'])->name('kelola_jabatan');
    Route::get('tambah', [JabatanController::class, 'create'])->name('jabatan_tambah');
    Route::POST('tambah', [JabatanController::class, 'store'])->name('jabatan_proses_tambah');
    Route::get('edit/{id}', [JabatanController::class, 'edit'])->name('jabatan_edit');
    Route::POST('edit/{id}', [JabatanController::class, 'update'])->name('proses_jabatan_edit');
    Route::DELETE('delete/{id}', [JabatanController::class, 'destroy'])->name('jabatan_delete');
});

//Data Provinsi
Route::prefix('kelola_provinsi')->group(function () {
    Route::get('index', [ProvinsiController::class, 'index'])->name('kelola_provinsi');
    Route::get('tambah', [ProvinsiController::class, 'create'])->name('provinsi_tambah');
    Route::POST('tambah', [ProvinsiController::class, 'store'])->name('provinsi_proses_tambah');
    Route::get('edit/{id}', [ProvinsiController::class, 'edit'])->name('provinsi_edit');
    Route::POST('edit/{id}', [ProvinsiController::class, 'update'])->name('proses_provinsi_edit');
    Route::DELETE('delete/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi_delete');
});

//Data Kabupaten
Route::prefix('kelola_kabupaten')->group(function () {
    Route::get('index', [KabupatenController::class, 'index'])->name('kelola_kabupaten');
    Route::get('tambah', [KabupatenController::class, 'create'])->name('kabupaten_tambah');
    Route::POST('tambah', [KabupatenController::class, 'store'])->name('kabupaten_proses_tambah');
    Route::get('edit/{id}', [KabupatenController::class, 'edit'])->name('kabupaten_edit');
    Route::POST('edit/{id}', [KabupatenController::class, 'update'])->name('proses_kabupaten_edit');
    Route::DELETE('delete/{id}', [KabupatenController::class, 'destroy'])->name('kabupaten_delete');
});

//Data Tujuan
Route::prefix('kelola_tujuan')->group(function () {
    Route::get('index', [TujuanController::class, 'index'])->name('kelola_tujuan');
    Route::get('tambah', [TujuanController::class, 'create'])->name('tujuan_tambah');
    Route::POST('tambah', [TujuanController::class, 'store'])->name('proses_tujuan_tambah');
    Route::get('edit/{id}', [TujuanController::class, 'edit'])->name('tujuan_edit');
    Route::POST('edit/{id}', [TujuanController::class, 'update'])->name('proses_tujuan_edit');
    Route::DELETE('delete/{id}', [TujuanController::class, 'destroy'])->name('tujuan_delete');
});

//Surat Tugas
Route::prefix('kelola_surattugas')->group(function () {
    Route::get('index', [SuratTugasController::class, 'index'])->name('kelola_surattugas');
    Route::get('cetaksurattugas', [SuratTugasController::class, 'cetak'])->name('cetak_surattugas');
    Route::get('tambah', [SuratTugasController::class, 'create'])->name('surattugas_tambah');
    Route::POST('tambah', [SuratTugasController::class, 'store'])->name('proses_surattugas_tambah');
    Route::get('edit/{id}', [SuratTugasController::class, 'edit'])->name('surattugas_edit');
    Route::POST('edit/{id}', [SuratTugasController::class, 'update'])->name('proses_surattugas_edit');
    Route::DELETE('hapus/{id}', [SuratTugasController::class, 'delete'])->name('surattugas_hapus');
});


//Tanda Tangan Dokumen
Route::prefix('kelola_dokumen')->group(function () {
    Route::get('index', [DokumenController::class, 'index'])->name('kelola_dokument');
    Route::get('tambah', [DokumenController::class, 'create'])->name('dokument_tambah');
    Route::POST('ajax', [DokumenController::class, 'ajax'])->name('ajax_dokument');
    Route::POST('tambah', [DokumenController::class, 'store'])->name('proses_dokument_tambah');
    Route::get('edit/{id}', [DokumenController::class, 'edit'])->name('dokument_edit');
    Route::POST('edit/{id}', [DokumenController::class, 'update'])->name('proses_dokument_edit');
    Route::DELETE('delete/{id}', [DokumenController::class, 'destroy'])->name('dokument_delete');
});

//detail luar daerah
Route::prefix('detail')->group(function () {
    Route::get('index', [DetailController::class, 'index'])->name('kelola_sppd');
    Route::get('tambah/{id}', [DetailController::class, 'create'])->name('detail_tambah');
    Route::POST('tambah/{id}', [DetailController::class, 'store'])->name('proses_detail_tambah');
    Route::get('detail/{id}', [DetailController::class, 'detail'])->name('detail_surat');
    Route::get('/detail/delete/{id}', [DetailController::class, "delete"])->name("detail_delete");
});

//detail dalam daerah
Route::prefix('detail_dalam')->group(function () {
    Route::get('index', [DetailDalamController::class, 'index'])->name('kelola_sppd_dalam');
    Route::get('tambah/{id}', [DetailDalamController::class, 'create'])->name('detail_dalam_tambah');
    Route::POST('tambah/{id}', [DetailDalamController::class, 'store'])->name('proses_detail_dalam_tambah');
    Route::get('detail/{id}', [DetailDalamController::class, 'detail_dalam'])->name('detail_surat_dalam');
    Route::get('/detail/delete/{id}', [DetailDalamController::class, "delete"])->name("detail_dalam_delete");
});

//Surat Tugas Dalam
Route::prefix('surat_tugas_dalam')->group(function () {
    Route::get('index', [SuratTugasDalamController::class, 'index'])->name('kelola_surattugasdalam');
    Route::get('cetaksptdalam', [SuratTugasDalamController::class, 'cetak'])->name('cetak_surattugasdalam');
    Route::get('tambah', [SuratTugasDalamController::class, 'create'])->name('surattugasdalam_tambah');
    Route::POST('tambah', [SuratTugasDalamController::class, 'store'])->name('proses_surattugasdalam_tambah');
    Route::get('edit/{id}', [SuratTugasDalamController::class, 'edit'])->name('surattugasdalam_edit');
    Route::POST('edit/{id}', [SuratTugasDalamController::class, 'update'])->name('proses_surattugasdalam_edit');
    Route::DELETE('hapus/{id}', [SuratTugasDalamController::class, 'delete'])->name('surattugasdalam_hapus');
});


//Cetak Luar Daerah
Route::prefix('cetak')->group(function () {
    Route::get('cetak/{id}', [CetakController::class, 'surat'])->name('cetak_surat');
    Route::get('cetak_staf/{id}', [CetakController::class, 'surat_staf'])->name('cetak_surat_staf');
});

//Cetak Dalam Daerah
Route::prefix('cetak_dalam')->group(function () {
    Route::get('cetak_dalam/{id}', [CetakDalamController::class, 'surat_dalam'])->name('cetak_surat_dalam');
    Route::get('cetak_staf_dalam/{id}', [CetakDalamController::class, 'sppd_dalam'])->name('cetak_surat_staf_dalam');
});

//cetak sppd
Route::prefix('sppd')->group(function () {
    Route::get('index', [SppdController::class, 'sppd'])->name('cetak_sppd');
});

//cetak sppd dalam
Route::prefix('sppd_dalam')->group(function () {
    Route::get('index', [SppdDalamController::class, 'sppd_dalam'])->name('cetak_surat_sppd_dalam');
});

//Cetak Surat Tugas Luar
Route::prefix('surat_tugas')->group(function () {
    Route::get('index', [SuratTugasController::class, 'index'])->name('kelola_surattugas');
    Route::get('cetaksurattugas', [SuratTugasController::class, 'cetak'])->name('cetak_surattugas');
    Route::get('tambah', [SuratTugasController::class, 'create'])->name('surattugas_tambah');
    Route::POST('tambah', [SuratTugasController::class, 'store'])->name('proses_surattugas_tambah');
    Route::get('edit/{id}', [SuratTugasController::class, 'edit'])->name('surattugas_edit');
    Route::POST('edit/{id}', [SuratTugasController::class, 'update'])->name('proses_surattugas_edit');
    Route::DELETE('hapus/{id}', [SuratTugasController::class, 'delete'])->name('surattugas_hapus');
});


//Data Biaya
Route::prefix('biaya_hotel')->group(function () {
    Route::get('hotel', [DataBiayaController::class, 'hotel'])->name('biaya_hotel');
    Route::get('hotel/{id}', [DataBiayaController::class, 'hotel_edit'])->name('hotel_edit');
    Route::POST('hotel/{id}', [DataBiayaController::class, 'hotel_update'])->name('proses_hotel_edit');
});

Route::prefix('uang_harian')->group(function () {
    Route::get('uang_harian', [UangHarianController::class, 'index'])->name('uang_harian');
    Route::get('uang_dalam/{id}', [UangHarianController::class, 'uang_dalam_edit'])->name('uang_dalam');
    Route::POST('uang_dalam/{id}', [UangHarianController::class, 'uang_dalam_update'])->name('proses_uang_dalam');
    Route::get('uang_luar/{id}', [UangHarianController::class, 'uang_luar_edit'])->name('uang_luar');
    Route::POST('uang_luar/{id}', [UangHarianController::class, 'uang_luar_update'])->name('proses_uang_luar');
});

Route::prefix('biaya_representasi')->group(function () {
    Route::get('biaya', [BiayaRepresentasiController::class, 'biaya_represantasi'])->name('biaya_represantasi');
    Route::get('biaya_edit/{id}', [BiayaRepresentasiController::class, 'represantasi_edit'])->name('represantasi_edit');
    Route::POST('biaya_edit/{id}', [BiayaRepresentasiController::class, 'represantasi_update'])->name('represantasi_update');
});


//SPJ LUAR
Route::prefix('spj')->group(function () {
    Route::get('index', [SpjController::class, 'index'])->name('kelola_spj');
    Route::get('cetak_spj', [SpjController::class, 'cetak'])->name('cetak_spj');
    Route::get('cetak_spj2/{id}', [SpjController::class, 'cetak2'])->name('spj_cetak2');
    Route::get('get_spj', [SpjController::class, 'get_spj'])->name('get_spj');
    Route::post('cek_sppd', [SpjController::class, 'cek_sppd'])->name('cek_sppd');
    Route::post('cek_rinciansppd', [SpjController::class, 'cek_rinciansppd'])->name('cek_rinciansppd');
    Route::get('tambah', [SpjController::class, 'create'])->name('spj_tambah');
    Route::POST('tambah', [SpjController::class, 'store'])->name('proses_spj_tambah');
    Route::get('edit/{id}', [SpjController::class, 'edit'])->name('spj_edit');
    Route::POST('edit/{id}', [SpjController::class, 'update'])->name('proses_spj_edit');
    Route::DELETE('hapus/{id}', [SpjController::class, 'delete'])->name('spj_delete');
});

//SPJ DALAM
Route::prefix('spj_dalam')->group(function () {
    Route::get('index', [SpjDalamController::class, 'index'])->name('kelola_spj_dalam');
    Route::get('cetak_spj_dalam', [SpjDalamController::class, 'cetak'])->name('cetak_spj_dalam');
    Route::get('cetak_spj2_dalam/{id}', [SpjDalamController::class, 'cetak2'])->name('spj_cetak2_dalam');
    Route::get('get_spj_dalam', [SpjDalamController::class, 'get_spj_dalam'])->name('get_spj_dalam');
    Route::post('cek_sppd_dalam', [SpjDalamController::class, 'cek_sppd_dalam'])->name('cek_sppd_dalam');
    Route::get('tambah', [SpjDalamController::class, 'create'])->name('spj_dalam_tambah');
    Route::POST('tambah', [SpjDalamController::class, 'store'])->name('proses_spj_dalam_tambah');
    Route::get('edit/{id}', [SpjDalamController::class, 'edit'])->name('spj_dalam_edit');
    Route::POST('edit/{id}', [SpjDalamController::class, 'update'])->name('proses_spj_dalam_edit');
    Route::DELETE('hapus/{id}', [SpjDalamController::class, 'delete'])->name('spj_dalam_delete');
});
//RINCIAN SPPD
Route::prefix('rincian_sppd')->group(function () {
    Route::get('index', [RincianSppdController::class, 'index'])->name('kelola_rincian_sppd');
    Route::get('cetak_rincian_sppd', [RincianSppdController::class, 'cetak'])->name('rincian_sppd_cetak');
    Route::get('cetak_rincian_sppd2/{id}', [RincianSppdController::class, 'cetak2'])->name('rincian_sppd_cetak2');
    Route::get('get_rincian_sppd', [RincianSppdController::class, 'get_rincian_sppd'])->name('get_rincian_sppd');
    Route::post('cek__rincian_sppd', [RincianSppdController::class, 'cek_rincian_sppd'])->name('cek_rincian_sppd');
    Route::post('get_biaya', [RincianSppdController::class, 'get_biaya'])->name('get_biaya');
    Route::post('get_representase', [RincianSppdController::class, 'get_representase'])->name('get_representase');
    Route::get('tambah', [RincianSppdController::class, 'create'])->name('rincian_sppd_tambah');
    Route::POST('tambah', [RincianSppdController::class, 'store'])->name('proses_rincian_sppd_tambah');
    Route::get('edit/{id}', [RincianSppdController::class, 'edit'])->name('rincian_sppd_edit');
    Route::POST('edit/{id}', [RincianSppdController::class, 'update'])->name('proses_rincian_sppd_edit');
    Route::DELETE('hapus/{id}', [RincianSppdController::class, 'delete'])->name('rincian_sppd_delete');
});

//RINCIAN SPPD DALAM
Route::prefix('rincian_sppd_dalam')->group(function () {
    Route::get('index', [RincianSppdDalamController::class, 'index'])->name('kelola_rincian_sppd_dalam');
    Route::get('cetak_rincian_sppd_dalam', [RincianSppdDalamController::class, 'cetak'])->name('rincian_sppd_cetak_dalam');
    Route::get('cetak_rincian_sppd2_dalam/{id}', [RincianSppdDalamController::class, 'cetak2'])->name('rincian_sppd_cetak2_dalam');
    Route::get('get_rincian_sppd_dalam', [RincianSppdDalamController::class, 'get_rincian_sppd_dalam'])->name('get_rincian_sppd_dalam');
    Route::post('cek_rincian_sppd_dalam', [RincianSppdDalamController::class, 'cek_rincian_sppd_dalam'])->name('cek_rincian_sppd_dalam');
    Route::post('get_biaya', [RincianSppdDalamController::class, 'get_biaya'])->name('get_biaya');
    Route::post('get_representase', [RincianSppdDalamController::class, 'get_representase'])->name('get_representase');
    Route::get('tambah', [RincianSppdDalamController::class, 'create'])->name('rincian_sppd_dalam_tambah');
    Route::POST('tambah', [RincianSppdDalamController::class, 'store'])->name('proses_rincian_sppd_dalam_tambah');
    Route::get('edit/{id}', [RincianSppdDalamController::class, 'edit'])->name('rincian_sppd_dalam_edit');
    Route::POST('edit/{id}', [RincianSppdDalamController::class, 'update'])->name('proses_rincian_sppd_dalam_edit');
    Route::DELETE('hapus/{id}', [RincianSppdDalamController::class, 'delete'])->name('rincian_sppd_dalam_delete');
});


Route::group(['middleware' => ['cek_login:surat_tugas']], function () {
    Route::get('surat_tugas', [AdminController::class, 'surat_tugas'])->name('surat_tugas');
});

Auth::routes();
