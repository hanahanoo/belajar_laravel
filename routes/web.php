<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;

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


route::get('/home', function (){
    return "Selamat Datang Di Halaman home";
});


route::get('/about', function (){
    return "Selamat Datang Di Halaman About";
});

route::get('/contact', function (){
    return "Selamat Datang Di Halaman Contact";
});


route::get('/siswa', function(){

    $data_siswa = ['hana', 'dhea', 'nabilla'];

    return view('tampil', compact('data_siswa'));
});


route::get('/tes/{nama2}/{tempat}/{jk}/{agama}/{alamat}', function($nama,$tmptlahir,$jk,$agama,$alamat){
    return "Nama : ".$nama. "<br>".
           "Tempat Lahir : ".$tmptlahir. "<br>".
           "Jenis Kelamin : ".$jk. "<br>".
           "Agama : ".$agama. "<br>".
           "Alamat : ".$alamat;
});

route::get('/hitung/{bilangan1}/{bilangan}', function($bilangan1,$bilangan2){
    return "Bilangan ke-1 : ".$bilangan1. "<br>".
           "Bilangan ke-2 : ".$bilangan2. "<br>".
           "Hasilnya : " .$bilangan1 + $bilangan2;
});

route::get('/latihan/{nama}/{nohp}/{jenis}/{namabarang}/{jumlah}/{pembayaran}', function($nama,$no,$jenis,$namabrg,$jumlah,$metodebayar){
        if($jenis == "Handphone"){
            if($namabrg == "Poco"){
               $harga = 3000000;
            }elseif($namabrg == "Samsung"){
              $harga = 5000000;
            }elseif($namabrg == "Iphone"){
              $harga = 15000000;
            } 
        } elseif ($jenis == "Laptop"){
            if ($namabrg == "Lenovo"){
             $harga = 4000000;
           }elseif($namabrg == "Acer"){
             $harga = 8000000;
           }elseif($namabrg == "Macbook"){
             $harga = 20000000;
        }
         }elseif($jenis == "TV"){
             if($namabrg == "Tohshiba"){
             $harga = 5000000;
            }elseif($namabrg == "Samsung"){
             $harga = 8000000;
            }elseif($namabrg == "LG"){
             $harga = 10000000;
            } else {
             $harga = 0;
       }
       
    }
           
          
           
           if($metodebayar == "cash"){
            $potongan = 0;
           }elseif($metodebayar == "transfer"){
            echo $potongan = 50000;
           } else{
            echo "0";
           };
            

        
           $total = $harga * $jumlah;
           
           if($total >= 10000000){
            $cashback = 500000;
        } else {
            echo "0";
        }
           return
           
           "Nama Pembeli : ".$nama. "<br>".
           "Telepon : ".$no. "<br>". 
           "----------------------------<br>".
           "Jenis Barang : ".$jenis. "<br>". 
           "Nama Barang : ".$namabrg. "<br>".
           "Harga : " .$harga. "<br>".
           "Jumlah : ".$jumlah. "<br>".
            "---------------------------<br>".
           "Total : ".$total. "<br>".
           "Cashback : ".$cashback. "<br>".
           "Pembayaran : ".$metodebayar. "<br>".
           "-----------------------------<br>".
           "Potongan : ".$potongan. "<br>".
           "-----------------------------<br>".
           "Total Pembayaran : " .$total - $potongan - $cashback;
          



});


//routing dengan model
Route::get('/post', [PostsController::class, 'menampilkan']);
Route::get('/barang', [PostsController::class, 'menampilkan2']);

// Route::get('/barang', function(){

//     $barang = Barang::all();
//     return view('tampil_barang', compact('barang'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\SiswasController::class, 'index'])->name('siswa');


Route::resource('siswa', SiswasController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\PpdbsController::class, 'index'])->name('ppdb');

Route::resource('ppdb', PpdbsController::class);