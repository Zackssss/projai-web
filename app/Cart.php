<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $quantiteTotal = 0;
    public $prixTotal = 0;

     public function __construct($oldCart)
{
    if ($oldCart){
        $this->items = $oldCart->items;
        $this->quantiteTotal = $oldCart->quantiteTotal;
        $this->prixTotal = $oldCart->prixTotal;
    }
}
    /* Fonction appelée par le controleur afin d'ajouter un produit dans le panier en choississant dans la boutique.
    On va ainsi avoir la quantité du produit ainsi que son prix en fonction de la quantité. */

    public function add($item, $id){
         $storedItem = ['quantite' => 0, 'prix' => $item->prix, 'item' => $item];
         if ($this->items){
             if(array_key_exists($id, $this->items)){
                 $storedItem = $this->items[$id];
             }
         }
         $storedItem['quantite']++;
         $storedItem['prix'] =$item->prix * $storedItem['quantite'];
         $this->items[$id] = $storedItem;
         $this->quantiteTotal++;
         $this->prixTotal += $item->prix;
    }

    /* Fonction appelée par le controleur afin d'incrémenter un produit existant dans le panier.
    On va ainsi avoir la quantité du produit ainsi que son prix en fonction de la quantité. */

    public function addIn($id){
        $this->items[$id]['quantite']++;
        $this->items[$id]['prix'] += $this->items[$id]['item']['prix'];
        $this->quantiteTotal++;
        $this->prixTotal += $this->items[$id]['item']['prix'];
    }

    /* Fonction appelée par le controleur afin de diminuer un produit existant dans le panier.
    On va ainsi avoir la quantité du produit ainsi que son prix en fonction de la quantité.
    Dans le cas où la quantite du produit est égale à 0 dans le panier, cela
    va le supprimer du panier */

    public function reduce($id){
         $this->items[$id]['quantite']--;
         $this->items[$id]['prix'] -= $this->items[$id]['item']['prix'];
         $this->quantiteTotal--;
         $this->prixTotal -= $this->items[$id]['item']['prix'];

         if ($this->items[$id]['quantite'] <= 0){
             unset($this->items[$id]);
         }
    }

    // Fonction appelée par le controleur afin d'enlever un produit existant dans le panier.

    public function remove($id){
        $this->quantiteTotal -= $this->items[$id]['quantite'];
        $this->prixTotal -= $this->items[$id]['prix'];
        unset($this->items[$id]);
    }
}
