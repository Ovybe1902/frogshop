<?php

namespace App\Http\Controllers;

use App\Models\Frog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrogController extends Controller
{
    public function index()
    {
        // Récupérer toutes les grenouilles
        $frogs = Frog::all();

        // Retourner la vue avec les grenouilles
        return view('frogs.index', compact('frogs'));
    }

    public function addToCart($id)
    {
        // Récupérer la grenouille par son ID
        $frog = Frog::findOrFail($id);

        // Créer une nouvelle transaction avec le statut 0
        $transaction = new Transaction();
        $transaction->id_frog = $frog->id_frog;
        $transaction->price = $frog->price;
        $transaction->transac_date = now();
        $transaction->id_client = Auth::id(); // Utilisateur authentifié
        $transaction->status = 0;
        $transaction->save();

        // Rediriger vers la liste des grenouilles avec un message de succès
        return redirect()->route('frogs.index')->with('success', 'Grenouille ajoutée au panier avec succès.');
    }
}

