<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    
    public function percobaan()
    {
    	$a = "Gunawan";
    	return "Nama Saya Adalah ".$a;
    }

    //posting data basic
    public function percobaan2()
    {
    	return  view('about');
    }
    //passing data variable to view
    public function percobaan3()
    {
    	$a = "Gugun Gunawan";
    	return  view('latihan.saya', compact('a'));
    }

    public function qwert()
    {
    	$t = "Gugun Gunawan";
    	$y = "XI RPL 2";
      	$u = "SMK assalaam bandung";
    	return view('latihan.qwert', compact('t','y','u'));
    }

    public function percobaan4()
    {
    	$a=1;
    	$b=2;
    	$c=3;
    	return view('latihan.seleksi',compact('a','b','c'));
    }

     public function percobaan5()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur'];
    	return view('latihan.buah',compact('buah'));
    }

    public function tugas()
    { 
    $mahluk=['macan','serigala','buaya','sapi','panda'];
    $buahn=['apel','jeruk','anggur','pepeya','manggis'];
    $komputer=['mouse','keyboard','cpu','hardisk','monitor'];
    return view('latihan.tugas',compact('mahluk','buahn','komputer'));
    }

 public function parameter($id)
    { 
    $asia=['binatang'=>['kucing','hamster','kelinci'],
            'buahnn'=>['mangga','sirsak','apel'],
            'komputer'=>['mouse','keyboard','monitor']
    ];

    $asia=$asia[$id];
    return view('latihan.tugas2', compact('asia'));
    }

    public function parameter2($data,$data2 = null)
    {
        $array = array('binatangx'=>['kucing'=>['persia','anggora'],
                                    'hamster'=>['hamtaro','hamtari'],
                                    'kelinci'=>['Anggora','persia']],
            
                        'buahx'=>['mangga'=>['harumanis','marijan'],
                                'alpukat'=>['hijau','hitam'],
                                'apel'=>['fuji','hejo']],

                        'komputerx'=>['asus'=>['4563','456'],
                                    'dell'=>['alienware','inspiron'],
                                    'acer'=>['6930','7780']]
            );

        if ($data){
            $query = (array_keys($array[$data]));
        }
        if ($data2){
            $query = ($array[$data][$data2]);
        }
        return view('latihan.tugas3',compact('query','data','data2'));
    }

    
 }