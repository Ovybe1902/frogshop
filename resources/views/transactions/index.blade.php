<!-- resources/views/transactions/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mes Transactions</h1>
        @if ($transactions->isEmpty())
            <p>Aucune transaction en cours.</p>
        @else
            <form method="POST" action="{{ route('validate.cart') }}">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Frog ID</th>
                            <th>Frog Name</th>
                            <th>Prix</th>
                            <th>Date de la Transaction</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id_transaction }}</td>
                                <td>{{ $transaction->id_frog }}</td>
                                <td>{{ $transaction->frog->name }}</td>
                                <td>{{ $transaction->price }}</td>
                                <td>{{ $transaction->transac_date }}</td>
                                <td>{{ $transaction->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Valider Panier</button>
            </form>
        @endif
    </div>
@endsection
