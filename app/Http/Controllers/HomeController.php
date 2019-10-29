<?php

namespace gilvanturismo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use gilvanturismo\Galeria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function home(){
        $fotos = Galeria::all();
        return view('index')->with(compact('fotos'));
     }
    public function index()
    {
        

        return view('home');
    }

    public function images()
    {
        $fotos = Galeria::all();
        return view('images')->with(compact('fotos'));
    }

    public function trocar(Request $request)
    {
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = $request->foto;

            // Recupera a extensão do arquivo
            $extension = $request->image->extension();
            // if($extension == 'jpeg'){
            //     $extension = 'jpg';
            // }

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->image->storeAs('galeria', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

            $galeria = Galeria::find($request->foto);
            $galeria->imagem = $nameFile;
            $galeria->save();

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        return back()
            ->withInput(['mensagem' => 'Imagem Alterada com sucesso']);
    }
    
}
