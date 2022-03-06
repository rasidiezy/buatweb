@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                       <strong> Update Diskon : {{ $discount->nama }}</strong>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.discount.update', $discount->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$discount->id}}">
                        <div class="form-group mb-4">
                              <label for="" class="form-label">Nama</label>
                              <input name="nama" type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" value="{{ old('nama') ?: $discount->nama}}">
                              @if ($errors->has('nama'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('nama') }}</p>
                            </div>
                              @endif
                        </div>
                        <div class="form-group mb-4">
                              <label for="" class="form-label">Kode Voucher</label>
                              <input name="kode_voucher" type="text" class="form-control {{ $errors->has('kode_voucher') ? 'is-invalid' : '' }}" value="{{ old('kode_voucher') ?: $discount->kode_voucher }}">
                              @if ($errors->has('kode_voucher'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('kode_voucher') }}</p>
                            </div>
                              @endif
                        </div>
                        <div class="form-group mb-4">
                              <label for="" class="form-label">Deskripsi</label>
                              <textarea name="deskripsi" type="text" class="form-control {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}">{{ old('deskripsi') ?: $discount->deskripsi }}</textarea>
                              @if ($errors->has('deskripsi'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('deskripsi') }}</p>
                            </div>
                              @endif
                        </div>
                        <div class="form-group mb-4">
                              <label for="" class="form-label">Persentase Diskon</label>
                              <input name="persentasi" type="number" class="form-control {{ $errors->has('persentasi') ? 'is-invalid' : '' }}" value="{{ old('persentasi') ?: $discount->persentasi }}" max="200">
                              @if ($errors->has('persentasi'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('persentasi') }}</p>
                            </div>
                              @endif
                        </div>
                        <div class="text-center">
                              <button type="submit" class=" btn-sm btn btn-primary">Simpan Data</button>
                        </div>

                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection