<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function showUserTransactions()
    {
        $user = Auth::user(); // Récupère l'utilisateur connecté

        // Récupère les transactions avec status 0 pour l'utilisateur connecté
        $transactions = Transaction::where('id_client', $user->id_client)
                                    ->where('status', 0)
                                    ->get();

        return view('transactions.index', compact('transactions'));
    }

    public function validateCart(Request $request)
    {
        $user = Auth::user(); // Récupère l'utilisateur connecté

        // Met à jour le statut des transactions de 0 à 1 pour l'utilisateur connecté
        Transaction::where('id_client', $user->id_client)
                    ->where('status', 0)
                    ->update(['status' => 1]);

        return redirect()->route('user.transactions')->with('success', 'Panier validé avec succès.');
    }
}
