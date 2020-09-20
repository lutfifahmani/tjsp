<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Tambah Berita
         $posts = Berita::all();
        return view('berita.listberita',[ 'posts' => $posts]);

    }

    public function profil()
    {
         // Tambah Berita
         $pages = Pages::where('page_name','profil')->get();
        return view('pages.profil',[ 'pages' => $pages]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah Berita
        return view('berita.tambahberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

      $request->validate([
            'judul' => 'required|unique:posts,judul',
            'image' => 'required|file|max:512'

        ]);

      $path = $request->file('image')->store('blog');
    
       $isi = $request->isi;
 
       $dom = new \DomDocument();

       libxml_use_internal_errors(true);
 
       $dom->loadHtml($isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
 
       $images = $dom->getElementsByTagName('img');
 
       foreach($images as $k => $img){
 
 
           $data = $img->getAttribute('src');
 
           list($type, $data) = explode(';', $data);
 
           list(, $data)      = explode(',', $data);
 
           $data = base64_decode($data);
 
           $image_name= "/images/" . time().$k.'.png';
 
           $path = public_path() . $image_name;
 
           file_put_contents($path, $data);
 
           $img->removeAttribute('src');
 
           $img->setAttribute('src', $image_name);
 
        }
 
 
       $isi = $dom->saveHTML();
 
       $summernote = new Berita;
 
       $summernote->judul = $request->judul;

       $summernote->image = $path;


        $summernote->sub_judul= $request->sub_judul;

       $summernote->url = Str::slug($request->judul, '-');
 
       $summernote->isi = $isi;

       $summernote->penulis = "Administrator";
 
       $summernote->save();
 
 
 
 
   //     $posts = new Berita;

    //    $posts->judul = $request->judul;
   //     $posts->gambar = $request->gambar;
   //     $posts->url = Str::slug($request->judul, '-');
     //   $posts->isi = $request->isi;
    //    $posts->penulis = "Administrator";

     //   $posts->save();

    //    $posts = Berita::all();

        return redirect('list-berita')->with('status', 'Berita Berhasil Dibuat!');
    }


    public function updateprofil(Request $request)
    {
        //
    
       $isi = $request->content;
 
       $dom = new \DomDocument();

       libxml_use_internal_errors(true);
 
       $dom->loadHtml($isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
 
       $images = $dom->getElementsByTagName('img');
 
       foreach($images as $k => $img){
 
 
           $data = $img->getAttribute('src');
 
           list($type, $data) = explode(';', $data);
 
           list(, $data)      = explode(',', $data);
 
           $data = base64_decode($data);
 
           $image_name= "/images/" . time().$k.'.png';
 
           $path = public_path() . $image_name;
 
           file_put_contents($path, $data);
 
           $img->removeAttribute('src');
 
           $img->setAttribute('src', $image_name);
 
        }
 
 
       $isi = $dom->saveHTML();
 
       $profil = Pages::find(1);
 
       $profil->title = $request->title;
 
       $profil->content = $isi;
 
       $profil->save();
 
 
 
 
   //     $posts = new Berita;

    //    $posts->judul = $request->judul;
   //     $posts->gambar = $request->gambar;
   //     $posts->url = Str::slug($request->judul, '-');
     //   $posts->isi = $request->isi;
    //    $posts->penulis = "Administrator";

     //   $posts->save();

    //    $posts = Berita::all();

        return redirect('ubah-profil')->with('status', 'Profil Berhasil Diperbaharui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //

        $posts = Berita::where('url', $slug)->get();

        return view('lihatartikel')->with([ 'posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

      $request->validate([
            'judul' => 'required',

        ]);

      if ($request->hasFile('image')) {
        

      $path = $request->file('image')->store('blog');

      # code...
      }
        $isi = $request->isi;
 
       $dom = new \DomDocument();

       libxml_use_internal_errors(true);
 
       $dom->loadHtml($isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
 
       $images = $dom->getElementsByTagName('img');
 
       foreach($images as $k => $img){
 
 
           $data = $img->getAttribute('src');
 
           list($type, $data) = explode(';', $data);
 
           list(, $data)      = explode(',', $data);
 
           $data = base64_decode($data);
 
           $image_name= "/images/" . time().$k.'.png';
 
           $path = public_path() . $image_name;
 
           file_put_contents($path, $data);
 
           $img->removeAttribute('src');
 
           $img->setAttribute('src', $image_name);
 
        }
 
 
       $isi = $dom->saveHTML();

        $update = Berita::find($id);

        $update->judul= $request->judul;
         $update->sub_judul= $request->sub_judul;

        $update->isi= $isi;

        if ($request->hasFile('image')) {
           $update->image= $path;
        }

        $update->url= Str::slug($request->judul, '-');

        $update->save();

        $posts = Berita::all();

        toastr()->success('Data has been saved successfully!');

        return redirect('list-berita')->with('status', 'Berita Berhasil Diperbaharui!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         $flight = Berita::find($id);

        $flight->delete();

        $posts = Berita::all();

        return redirect('list-berita')->with('status', 'Berita Berhasil Dihapus!');
    }


    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
}


}
