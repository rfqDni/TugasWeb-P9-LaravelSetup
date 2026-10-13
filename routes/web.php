<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'Mahasiswa Unimed',
        'courses' => ['HTML', 'CSS', 'JavaScript', 'Laravel']
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'Tentang Saya',
        'bio' => 'Saya sedang belajar framework Laravel untuk Tugas Rutin 9.'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'mahasiswa@unimed.ac.id',
        'sosmed' => '@unimed_official'
    ]);
});