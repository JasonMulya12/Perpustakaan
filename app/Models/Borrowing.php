<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table = 'borrowings';
    protected $filabel = ['nama_peminjam', 'judul_buku', 'tgl_pinjam', 'tgl_kembali', 'ket'];
    use HasFactory;
}
