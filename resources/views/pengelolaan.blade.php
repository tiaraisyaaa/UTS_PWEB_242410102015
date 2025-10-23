@extends('layouts.app')

@section('content')
<div class="produk-container mt-5 text-center">
    <div class="produk-card p-4 shadow-sm">
        <h3 class="fw-bold text-primary mb-4">Pudding TropiSweet</h3>
        <p class="text-muted mb-4">Natural Sweetness, Pure Happiness!</p>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-header">
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($menu as $products)
                    <tr>
                        <td class="fw-semibold text-primary">{{ $products['product'] }}</td>
                        <td>{{ ($products['Harga']) }}</td>
                        <td>{{ $products['Stock'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    <div class="d-flex justify-content-center gap-4 flex-wrap mt-4">
    @include('components.puddingjagung', ['image' => 'puddingjagung.jpg', 'name' => 'Pudding Jagung'])
    @include('components.puddingnangka', ['image' => 'puddingnangka.jpg', 'name' => 'Pudding Nangka'])
    </div>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #b7e5ff 0%, #e8f9ff 100%);
        font-family: 'Poppins', sans-serif;
    }

    .produk-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .produk-card {
        background-color: #ffffff;
        border-radius: 20px;
        max-width: 800px;
        width: 100%;
        box-shadow: 0 4px 20px rgba(0, 128, 255, 0.15);
    }

    .table {
        border-collapse: separate;
        border-spacing: 0 8px;
    }

    .table th {
        background-color: #79c3ff;
        color: white;
        border: none;
        text-align: center;
    }

    .table td {
        background-color: #f8fbff;
        border: none;
        text-align: center;
        border-radius: 10px;
    }


    .table-header th:first-child {
        border-top-left-radius: 10px;
    }

    .table-header th:last-child {
        border-top-right-radius: 10px;
    }
</style>
@endsection
