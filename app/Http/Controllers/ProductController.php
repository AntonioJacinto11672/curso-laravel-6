<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {

        $this->request = $request;
        //$this->middleware('auth');
        //$this->middleware('auth')->only(['create', 'story']);

        //Aplicar em todos  os seguintes metodos
       /*  $this->middleware('auth')->except([ 'index','show']); */

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teste = 123;
        $teste3 = [1,2,3,4,5];
        $products = ['Prod 1','Prod 2','prod 3','prod 4','prod 5'];
        $teste2 = 1234;
        //return view('teste', ['teste' => $teste]);

       return view('admin.pages.products.index', compact('teste','teste2','teste3','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'deception' => 'nullable|min:3'|'max:1000',
            'photo' => 'required|image'
        ]);


        //Pegar Os Dados do Formulario
        //dd($request->all('name','description'));
        //dd($request->name());
        //dd($request->only('name','description'));
        //dd($request->input('name','description'));
        //Upload De Arquivo
        // Pegar Os Dados
        //dd($request->file("photo"));
        //dd($request->photo);

        //dd($request->except('_token'));
        //Verificar se é valido
        //dd($request->file("photo")->isValid());
        //Peragar Nome e Extensão do Arguivo
        //dd($request->photo->extension());
        //dd($request->photo->getClientOriginalName());
        //Vai Criar um Novo Arguivo  e Vai quardar lá o arquivo do upload
        //$request->file("photo")->store("products/teste");
        if (($request->file("photo")->isValid())) {
            //Pegar Extensão
            //dd($request->photo->extension());
            //dd($request->photo->getClientOriginalName());
            //dd($request->file("photo")->store("products/teste"));
            //Upload Constumizado
            $nomeFile = $request->name . "." . $request->photo->extension();
            //dd($request->file("photo")->storeAs('products', $nomeFile));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o Produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
