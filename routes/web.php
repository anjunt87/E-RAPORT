<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboardadmin', ['title' => 'Dashboard']);
});

// Input
Route::get('/tujuanpembelajaran', function () {
    return view('input.tujuanpembelajaran', ['title' => 'Input Pembelajaran']);
});

Route::get('/lingkupmateri', function () {
    return view('input.lingkupmateri', ['title' => 'Lingkup Materi']);
});

Route::get('/asesmenformatif', function () {
    return view(
        'input.asesmenformatif',
        ['title' => 'Asesmen Formatif']
    );
});

Route::get('/asesmensumatif', function () {
    return view(
        'input.asesmensumatif',
        ['title' => 'Asesmen Sumatif']
    );
});

Route::get('/penilaianekstrkulikuler', function () {
    return view(
        'input.penilaianekstrkulikuler',
        ['title' => 'Penilaian Eksrakulikuler']
    );
});

Route::get('/nilaiakhir', function () {
    return view(
        'input.nilaiakhir',
        ['title' => 'Nilai Akhir']
    );
});

// Data Master
Route::get('/datasekolah', function () {
    return view(
        'datamaster.datasekolah',
        ['title' => 'Data Sekolah']
    );
});

Route::get('/datakelas', function () {
    return view(
        'datamaster.datakelas',
        ['title' => 'Data Kelas']
    );
});

Route::get('/dataguru', function () {
    return view(
        'datamaster.dataguru',
        ['title' => 'Data Guru']
    );
});

Route::get('/datasiswa', function () {
    return view(
        'datamaster.datasiswa',
        ['title' => 'Data Siswa']
    );
});

Route::get('/mapelintrakulikuler', function () {
    return view(
        'datamaster.mapelintrakulikuler',
        ['title' => 'Mapel Intrakulikuler']
    );
});

Route::get('/mapelekstrakulikuler', function () {
    return view(
        'datamaster.mapelekstrakulikuler',
        ['title' => 'Mapel Ekstrakulikuler']
    );
});

// TP
Route::get('/pendidikanagama', function () {
    return view(
        'tp.pai',
        ['title' => 'Tujuan Pembelajaran PAI']
    );
});
