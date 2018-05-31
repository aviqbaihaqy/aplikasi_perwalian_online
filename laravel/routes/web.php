<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

// Ika Nada Weny Dwiyanti, 2015160017,SEKRETARIAT JURUSAN,PROFIL USER & MENU
Route::get('users/profile', 'UsersController@profile')->name('profile');

// Ika Nada Weny Dwiyanti, 2015160017,DOSEN WALI,GANTI PASSWORD
Route::put('users/{user_id}/password', 'UsersController@updatePassword')->name('update password');
Route::put('users/{user_id}/email', 'UsersController@updateEmail')->name('update email');

// Lailatul Maulidah, 2016160001,SEKRETARIAT JURUSAN,MASTER MAHASISWA
// Lailatul Maulidah, 2016160001,JURUSAN,MASTER MAHASISWA
Route::resource('mahasiswa', 'MahasiswaController');
Route::put('mahasiswa/{mahasiswa_id}/password', 'MahasiswaController@updatePassword')->name('mahasiswa update password');

// Barik Maulana Rijal, 2016160003,SEKRETARIAT JURUSAN,MASTER KELAS
// Barik Maulana Rijal, 2016160003,JURUSAN,MASTER KELAS
Route::resource('kelas', 'KelasController');

// Meyta Nadyasari Nur Hidayanti, 2016160004,SEKRETARIAT JURUSAN,MASTER NILAI
// Meyta Nadyasari Nur Hidayanti, 2016160004,JURUSAN,MASTER NILAI
Route::resource('nilai', 'NilaiController');

// Dimas Aji Firmansyah Rizaldi, 2016160005,SEKRETARIAT JURUSAN,MASTER KONVERSI NILAI
Route::resource('nilaikonversi', 'NilaiKonversiController');

// Dimas Aji Firmansyah Rizaldi, 2016160005,MAHASISWA,LIHAT HISTORI NILAI
Route::get('historynilai', 'NilaiController@historyNilai')->name('history nilai');

// Ibrohim, 2016160006,SEKRETARIAT JURUSAN,REGISTRASI
Route::get('registrasi', 'RegistrasiController@showRegistrasi')->name('show registrasi');
Route::post('registrasi', 'RegistrasiController@storeRegistrasi')->name('store registrasi');

// Ibrohim, 2016160006,JURUSAN,PROFIL JURUSAN
Route::get('profilejurusan', 'JurusanController@profile')->name('profile jurusan');

// Seta Aji Hari Mukti, 2016160007,SEKRETARIAT JURUSAN,STATISTIK PERWALIAN
Route::get('statistik', 'StatistikController@perwalian')->name('statistik perwalian');

// Seta Aji Hari Mukti, 2016160007,SEKRETARIAT JURUSAN,PENGISIAN KELAS
Route::get('pengisiankelas', 'KelasController@createPengisian')->name('create pengisian kelas');
Route::post('pengisiankelas', 'KelasController@storePengisian')->name('store pengisian kelas');

// Fery Andriyanto, 2016160008,JURUSAN,MASTER KURIKULUM
Route::resource('kurikulum', 'KurikulumController');

Route::get('kurikulum/{kurikulum_id}/pengaturan', 'KurikulumController@pengaturan')->name('pengaturan matakuliah kurikulum');
Route::get('kurikulum/{kurikulum_id}/matakuliah/create', 'KurikulumController@createMatakuliah')->name('create matakuliah kuriklulum');
Route::post('kurikulum/{kurikulum_id}/matakuliah', 'KurikulumController@storeMatakuliah')->name('store matakuliah kurikulum');
Route::get('kurikulum/{kurikulum_id}/matakuliah/{matakuliah_id}/edit', 'KurikulumController@editMatakuliah')->name('edit matakuliah kurikulum');
Route::put('kurikulum/{kurikulum_id}/matakuliah/{matakuliah_id}', 'KurikulumController@updateMatakuliah')->name('update matakuliah kurikulum');
Route::delete('kurikulum/{kurikulum_id}/matakuliah/{matakuliah_id}', 'KurikulumController@destroyMatakuliah')->name('destroy matakuliah kurikulum');

Route::get('kurikulum/{kurikulum_id}/matakuliah/{matakuliah_id}/prasyarat', 'KurikulumController@createPrasyarat')->name('create prasyarat matakuliah kurikulum');
Route::post('kurikulum/{kurikulum_id}/matakuliah/{matakuliah_id}/prasyarat', 'KurikulumController@storePrasyarat')->name('store prasyarat matakuliah kurikulum');

Route::get('kurikulum/{kurikulum_id}/copy', 'KurikulumController@createCopy')->name('create copy matakuliah kurikulum');
Route::post('kurikulum/{kurikulum_id}/copy', 'KurikulumController@storeCopy')->name('store copy matakuliah kurikulum');

// Yanti, 2016160009,JURUSAN,MASTER DOSEN
Route::resource('dosen', 'DosenController');
// Yanti, 2016160009,DOSEN WALI,PROFIL DOSEN
Route::get('dosen/profile', 'DosenController@profile')->name('profile dosen');

// Hendri Prasetiyo, 2016160011,JURUSAN,ATUR SEMESTER AKTIF
Route::get('semester', 'SemesterController@index')->name('semester index');

// Nadia Lailatul Fitriyah, 2016160012,DOSEN WALI,MATAKULIAH & PRASRARAT
Route::get('matakuliahprasyarat', 'MatakuliahController@prasyarat')->name('matakuliah prasyarat');

// Nadia Lailatul Fitriyah, 2016160012,DOSEN WALI,LIHAT DAFTAR KELAS
Route::get('daftarkelas', 'KelasController@list')->name('daftar kelas');
Route::get('kelas/{kelas_id}/detail', 'KelasController@detailKelas')->name('isi kelas');
Route::get('mahasiswa/{mahasiswa_id}/nilai', 'MahasiswaController@showNilai')->name('isi kelas');

// Dewi Faiqotul Makrufah, 2016160013,SEKRETARIAT JURUSAN,KARTU STUDI
Route::get('cetak/kartustudi', 'CetakController@kartuStudi')->name('cetak kartu studi');

// Dewi Faiqotul Makrufah, 2016160013,MAHASISWA,PROFIL MAHASISWA
Route::get('mahasiswa/{mahasiswa_id}/profile', 'MahasiswaController@profile')->name('profile mahasiswa');

// Ahmad Maezun, 2016160014,DOSEN WALI,PENYETUJUAN RENCANA STUDI
Route::get('perwalian', 'PerwalianController@index')->name('perwalian');
Route::get('perwalian/{kelas_id}/isikelas', 'PerwalianController@isiKelas')->name('isi kelas perwalian');
Route::get('perwalian/{mahasiswa_id}/frs', 'PerwalianController@formRencanaStudi')->name('frs mahasiswa');

Route::get('perwalian/{mahasiswa_id}/persetujuan', 'PerwalianController@createPersetujuan')->name('create persetujuan frs');
Route::post('perwalian/{mahasiswa_id}/persetujuan', 'PerwalianController@storePersetujuan')->name('store persetujuan frs');

// Eva Kurniawati, 2016160015,MAHASISWA,PENGISIAN FRS
Route::get('frs', 'FrsController@createFrs')->name('create frs');
Route::post('frs', 'FrsController@storeFrs')->name('store frs');

// Eva Kurniawati, 2016160015,MAHASISWA,LIHAT FRS
Route::get('frs/show', 'FrsController@showFrs')->name('show frs');

// Muhammad Alim Khafidz  Zundiri, 2016160016,SEKRETARIAT JURUSAN,FORM NILAI
// Muhammad Alim Khafidz  Zundiri, 2016160016,JURUSAN,FORM NILAI
Route::get('cetak/formnilai', 'CetakController@createFormnilai')->name('create form nilai');
Route::post('cetak/formnilai', 'CetakController@cetakFormnilai')->name('cetak form nilai');

// Siti Mubarokah, 2016160017,SEKRETARIAT JURUSAN,ABSENSI UAS
// Siti Mubarokah, 2016160017,JURUSAN,ABSENSI UAS
Route::get('cetak/absensiuas', 'CetakController@createAbsensiUas')->name('create absensi uas');
Route::post('cetak/absensiuas', 'CetakController@cetakAbsensiUas')->name('cetak absensi uas');

// Wiyahman, 2016160020,SEKRETARIAT JURUSAN,ABSENSI KELAS
// Wiyahman, 2016160020,JURUSAN,ABSENSI KELAS
Route::get('cetak/absensikelas', 'CetakController@createAbsensiKelas')->name('create absensi kelas');
Route::post('cetak/absensikelas', 'CetakController@cetakAbsensiKelas')->name('cetak absensi kelas');

// Faiz Amrillah, 2016160021,SEKRETARIAT JURUSAN,ABSENSI UTS
// Faiz Amrillah, 2016160021,JURUSAN,ABSENSI UTS
Route::get('cetak/absensiuts', 'CetakController@createAbsensiUts')->name('create absensi uts');
Route::post('cetak/absensiuts', 'CetakController@cetakAbsensiUts')->name('cetak absensi uts');