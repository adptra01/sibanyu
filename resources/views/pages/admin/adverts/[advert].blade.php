<?php

use function Livewire\Volt\{state, rules};
use function Laravel\Folio\name;
use App\Models\Advert;

name('adverts.edit');

$destroy = function (advert $advert) {
    Storage::delete($advert->image);
    $advert->delete();

    return redirect()->route('adverts.index')->with('success', 'Proses Berhasil Dilakukan 😁!');
};

state(['advert']);

?>

<x-admin-layout>
    <x-slot name="title">{{ $advert->name }}</x-slot>

    @volt
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Iklan</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $advert->name }}</li>
                </ol>
            </nav>
            <div class="nav-align-top">
                <ul class="nav nav-pills mb-3 row" role="tablist">
                    <li class="nav-item col-md">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-preview" aria-controls="navs-pills-top-preview"
                            aria-selected="true">
                            <i class='bx bxs-dock-top'></i>
                            Keterangan
                        </button>
                    </li>
                    <li class="nav-item col-md">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-edit" aria-controls="navs-pills-top-edit" aria-selected="false">
                            <i class='bx bx-edit'></i>
                            Edit Iklan</button>
                    </li>
                    <li class="nav-item col-md">
                        <button class="nav-link" role="tab" data-bs-toggle="tab"
                            wire:click='destroy({{ $advert->id }})'
                            wire:confirm.prompt="Yakin Ingin Menghapus?\n\nTulis 'hapus' untuk konfirmasi!|hapus"
                            wire:loading.attr="disabled">
                            <i class='bx bx-trash'></i>
                            Hapus Iklan</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-preview" role="tabpanel">

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">ID</p>
                            <div class="col-md-9">
                                <p>: {{ $advert->id }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Nama Iklan</p>
                            <div class="col-md-9">
                                <p>: {{ $advert->name }}</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Status Iklan</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">:
                                    <span
                                        class="badge bg-{{ $advert->status == 1 ? 'success' : 'danger' }}">{{ $advert->status == 1 ? 'Aktif' : 'Non Aktif' }}</span>
                                </p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Link Iklan</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">:
                                    <a href="{{ $advert->link }}">{{ $advert->link }}</a>
                                </p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Jumlah Klik</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">: {{ $advert->click }} Kali</p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Posisi/Letak</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">: {{ $advert->position }}

                                    @if ($advert->position == 'top')
                                        (Atas)
                                    @elseif($advert->position == 'side')
                                        (Samping)
                                    @elseif($advert->position == 'popup')
                                        (Muncul Tiba-tiba)
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Tanggal Mulai</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">:
                                    {{ Carbon\Carbon::parse($advert->start_date)->format('d M Y') }} </p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Tanggal Berakhir</p>
                            <div class="col-md-9">
                                <p class="text-capitalize">:
                                    {{ Carbon\Carbon::parse($advert->end_date)->format('d M Y') }} </p>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <p class="col-md-3 fw-bold">Gambar Iklan</p>
                            <div class="col-md-9">
                                : <a class="fw-bold text-sm" data-bs-toggle="collapse" href="#collapseThumbnail"
                                    role="button" aria-expanded="false" aria-controls="collapseThumbnail"> Lihat
                                    <i class='bx bxs-down-arrow bx-xs'></i></a>
                                <div class="collapse" id="collapseThumbnail">
                                    <div class="d-flex p-3">
                                        <img src="{{ Storage::url($advert->image) }}" alt="collapse-image"
                                            class="me-4 mb-sm-0 mb-2 w-100">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-edit" role="tabpanel">
                        <form action="{{ route('adverts.update', $advert->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Iklan <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" value="{{ $advert->name }}"
                                        aria-describedby="name" placeholder="Input name advert" />
                                    @error('name')
                                        <small id="name" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link Iklan <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror"
                                        name="link" id="link" value="{{ $advert->link }}"
                                        aria-describedby="link" placeholder="Input link advert" />
                                    @error('link')
                                        <small id="link" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar Iklan <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" id="image" aria-describedby="image"
                                            placeholder="Input image advert" />
                                        @error('image')
                                            <small id="image" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="alt" class="form-label">Alt (Deskripsi Singkat) Gambar <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <input type="text" class="form-control @error('alt') is-invalid @enderror"
                                            name="alt" id="alt" value="{{ $advert->alt }}"
                                            aria-describedby="alt" placeholder="Input alt advert" />
                                        @error('alt')
                                            <small id="alt" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Tanggal Mulai Iklan <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <input type="date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            name="start_date" id="start_date" value="{{ $advert->start_date }}"
                                            aria-describedby="start_date" placeholder="Input start_date advert" />
                                        @error('start_date')
                                            <small id="start_date" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">Tanggal Berakhir Iklan <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                            name="end_date" id="end_date" value="{{ $advert->end_date }}"
                                            aria-describedby="end_date" placeholder="Input end_date advert" />
                                        @error('end_date')
                                            <small id="end_date" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status Iklan <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <select class="form-select @error('status') is-invalid @enderror" name="status"
                                            id="status">
                                            <option selected disabled>Select one</option>
                                            <option value="1" {{ $advert->status == '1' ? 'selected' : '' }}>Aktif
                                            </option>
                                            <option value="0" {{ $advert->status == '0' ? 'selected' : '' }}>Non
                                                Aktif
                                            </option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <small id="status" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="position" class="form-label">position Iklan <strong
                                                class="text-danger">*</strong>
                                        </label>
                                        <select class="form-select @error('position') is-invalid @enderror"
                                            name="position" id="position">
                                            <option selected disabled>Select one</option>
                                            <option value="top" {{ $advert->position == 'top' ? 'selected' : '' }}>Atas
                                            </option>
                                            <option value="side" {{ $advert->position == 'side' ? 'selected' : '' }}>
                                                Samping
                                            </option>
                                            <option value="popup" {{ $advert->position == 'popup' ? 'selected' : '' }}>
                                                Popup
                                                (Muncul
                                                Tiba-tiba)</option>
                                        </select>
                                    </div>
                                    @error('position')
                                        <small id="position" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col text-md-end text-center">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endvolt

</x-admin-layout>