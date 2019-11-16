<?php
namespace App\Http\Controllers;
use App\Produit;
use App\Cart;
use View;
use File;
use Response;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spipu\Html2Pdf\Html2Pdf;

class ProduitController extends Controller
{
    public function index()
    {

        $produit = Produit::all();
        return view('boutique')-> with('Produit', $produit);

    }
    public function Id()
    {
        $produit = Produit::all();
        $produit = $produit->sortBy('id_produit');
        return view('boutique')-> with('Produit', $produit);
    }
    public function indexWithId($id)
    {

        $produit = Produit::where('id_produit',$id)->get();

        return view('produits')-> with('Produit', $produit);



    }
    public function dljsonprod($id)
    {

        $produit = Produit::where('id_produit',$id)->get();
        $data = json_decode($produit,true);


        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML(implode(",", $data[0]));
        $html2pdf->output();
        // if you want to Dl as json comment all $html2pd and uncomment bellow
        /*
        $dt = Carbon::now(); // setting date

        $dt=$dt->toDateString('Y-M-D');
        $fileName = 'produitN°'.$id."_".$dt.random_int(1,20000).'_datafile.pdf';
        $pb=public_path($fileName);

        File::put($fileName,$htmlpdf);



	    return response()->download($pb, $fileName);
        */




    }
    public function indextop3()
    {
        $produit = Produit::all();
        $produit = $produit->sortByDesc('nbr_de_vente');
        return view('toparticles')-> with('Produit', $produit);
    }
    public function TriBoutiqueId()
    {
        $produit = Produit::all();
        $produit = $produit->sortBy('id_produit');
        return view('boutique')-> with('Produit', $produit);
    }

    public function TriBoutiquePrix()
    {
        $produit = Produit::all();
        $produit = $produit->sortBy('prix');
        return view('boutique')-> with('Produit', $produit);
    }

    public function TriBoutiqueEvent()
    {

        $produit = Produit::where('id_evenement','!=',0)->get();
        return view('boutique')-> with('Produit', $produit);

    }
    public function TriBoutiqueNotEvent()
    {

        $produit = Produit::where('id_evenement','=',0)->get();
        return view('boutique')-> with('Produit', $produit);

    }

    public function addCart(Request $request, $id){

        $produit = Produit::where('id_produit',$id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produit, $produit->id_produit);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));//
        return redirect()->route('boutique');
    }

    public function addInCart($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addIn($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function reduceCart($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('shoppingCart');
    }

    public function removeCart($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('shoppingCart');
    }

    public function shoppingCart(){
        if (!Session::has('cart')){
            return view('panier', ['produit' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('panier', ['produit' => $cart -> items, 'prixTotal' => $cart -> prixTotal]);
    }

    public function create()
    {
        return view('createProduit');
    }

        public function store(){
            $produit = new Produit();
            $produit->url_image_produit = request('url_image_produit');
            $produit->nom_produit = request('nom_produit');
            $produit->description_produit = request('description_produit');
            $produit->prix = request('prix');
            $produit->nbr_de_vente = 0;
            $produit->id_evenement = request('id_evenement');
            $produit->save();
            return "Produit sauvegardé !";
        }
       /*public function store(Request $request)
       {
           $produit = $request->isMethod('put') ? Produit::findOrFail($request->id) : new Produit();
           $produit->id = $request->input('id');
           $produit->nom_produit = $request->input('nom_produit');
           $produit->description_produit = $request->input('description_produit');
           $produit->prix = $request->input('prix');
           if ($produit->save()) {
               return new Produit($produit);
           }
       }
       public function show($id)
       {
           $produit = Produit::findOrFail($id);
           return new Produit($produit);
       }
       public function destroy($id)
       {
           $produit = Produit::findOrFail($id);
           return new Produit($produit);
       }*/
}
