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

    public function addIn($id){
        $this->items[$id]['quantite']++;
        $this->items[$id]['prix'] += $this->items[$id]['item']['prix'];
        $this->quantiteTotal++;
        $this->prixTotal += $this->items[$id]['item']['prix'];
    }

    public function reduce($id){
         $this->items[$id]['quantite']--;
         $this->items[$id]['prix'] -= $this->items[$id]['item']['prix'];
         $this->quantiteTotal--;
         $this->prixTotal -= $this->items[$id]['item']['prix'];

         if ($this->items[$id]['quantite'] <= 0){
             unset($this->items[$id]);
         }
    }
    public function remove($id){
        $this->quantiteTotal -= $this->items[$id]['quantite'];
        $this->prixTotal -= $this->items[$id]['prix'];
        unset($this->items[$id]);
    }
}
