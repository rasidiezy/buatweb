@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Paket Saya
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Waktu Beli</th>
                                    <th>Status Pembayaran</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $item)
                                    <tr>
                                        <td>{{ $item->User->nama }}</td>
                                        <td>{{ $item->Paket->judul }}</td>
                                        <td>{{ @currency($item->Paket->harga )}}</td>
                                        <td>{{ $item->created_at->format('d Mm Y') }}</td>
                                        <td>
                                            @if ($item->is_paid)
                                                 <span class="badge bg-success">Telah Bayar</span>
                                              @else
                                                <span class="badge bg-warning">Menunggu Pembayaran</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if (!$item->is_paid)
                                            <form action="{{ route('admin.checkout.paid', $item->id) }}" method="post">
                                                @csrf
                                                <button class="btn btn-primary btn-sm">Telah Bayar</button>
                                            </form>
                                            @else
                                            <form action="{{ route('admin.checkout.unpaid', $item->id) }}" method="post">
                                                @csrf
                                                <button class="btn btn-secondary btn-sm" style="
                                                color: #c2003a;
                                            ">Batalkan</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection