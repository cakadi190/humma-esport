@extends('layouts.app')

@section('title', 'Kategori Game')

@section('links')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('style')
    <style>
        .image-square {
            aspect-ratio: 1 / 1;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5rem;
            height: 5rem;
            border-radius: var(--bs-border-radius);
        }

        .image-square img {
            height: 5rem;
            height: 5rem;
        }
    </style>
@endsection

@section('content')

    <section class="pb-120 pt-120 mb-120">
        <div class="container-fluid">
            @include('components.alert')

            <div class="row gy-4 mb-6 align-items-center justify-content-between">
                <div class="col-6">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim" style="width: fit-content;">
                        Kategori Game
                    </h2>
                </div>
                <div class="col-md-3">
                    <div class="d-flex gap-4">
                        <form action="{{ route('panel.game-category.index') }}" class="d-flex gap-4 align-items-center">
                            <input type="text" class="form-control" name="search" placeholder="Cari turnament&hellip;"
                                value="{{ request()->get('search') }}" />
                            <button class="btn btn-login">Cari</button>
                        </form>

                        <button data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary ms-4">
                            <div class="ti ti-plus"></div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="pt-8">
                <div class="py-8 px-6 d-none d-md-none d-lg-block border-bottom"
                    style="--bs-border-color: rgba(255,255,255, .125)">
                    <div class="row">
                        <div class="col-md-5">Nama Game</div>
                        <div class="col-md-5">Maksimal Member Dalam Tim</div>
                        <div class="col-md-2">Aksi / Status</div>
                    </div>
                </div>
                @forelse ($gameCategories as $index => $category)
                    <div class="py-8 px-0 px-lg-6 {{ $gameCategories->count() === ++$index ? '' : 'border-bottom' }}"
                        style="--bs-border-color: rgba(255,255,255, .125)">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-5">
                                <div class="d-flex gap-6 align-items-center">
                                    <div class="image-square position-relative" style="height: 5rem;width: 5rem;">
                                        <img src="{{ url("/storage/{$category->image}") }}" alt="{{ $category->name }}" />
                                    </div>

                                    <h3 class="mb-0">{{ $category->name }}</h3>
                                </div>
                            </div>
                            <div class="col-md-5">{{ $category->number_of_users }} anggota / tim</div>
                            <div class="col-md-2">
                                {{-- Delete Form --}}
                                <form method="POST" action="{{ route('panel.game-category.destroy', $category->id) }}"
                                    id="deleting-form-{{ $category->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                {{-- Delete Form --}}

                                <div class="d-flex gap-3 align-items-stretch">
                                    <button class="btn-lg btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal-{{ $category->id }}">
                                        <i class="ti ti-pencil"></i>
                                    </button>

                                    <button class="btn-lg btn btn-danger"
                                        onclick="runModalConfirmWithSubmit('Apakah kamu ingin menghapus kategori game ini?', '#deleting-form-{{ $category->id }}', {customClass: {actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex', confirmButton: 'btn-lg btn btn-danger', cancelButton: 'btn-lg btn btn-light'}})">
                                        <div class="ti ti-trash"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="row justify-content-center py-8 px-0 px-lg-6">
                        <div class="col-6">
                            <div class="text-center">
                                @include('components.empty-state')

                                <button data-bs-toggle="modal" data-bs-target="#createModal"
                                    class="btn btn-primary mt-6">Buat Baru</button>
                            </div>
                        </div>
                    </div>
                @endforelse

                {{ $gameCategories->links() }}
            </div>
        </div>
    </section>

    <!-- Modal Create Start -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="--bs-modal-header-border-color: rgba(255,255,255, .125)">
                    <h1 class="modal-title fs-5" id="createModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('panel.game-category.store') }}" enctype="multipart/form-data" method="POST"
                        id="form-createdata">
                        @csrf

                        <div class="mb-4 d-flex flex-column gap-2 form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" id="name" value="{{ old('name') }}" class="form-control"
                                placeholder="Masukkan nama kategori" name="name" />

                            @error('name')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 d-flex flex-column gap-2 form-group">
                            <label for="image">Gambar</label>
                            <input type="file" id="image" class="form-control" name="image" />

                            @error('image')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mt-3">
                                <img src="{{ asset('images/preview.jpg') }}" id="image-preview-create"
                                    class="w-100 rounded-3" alt="Preview" />
                            </div>
                        </div>

                        <div class="mb-4 d-flex flex-column gap-2 form-group">
                            <label for="number_of_users">Anggota Per Tim</label>
                            <input type="number" id="number_of_users" value="{{ old('number_of_users') }}"
                                class="form-control" placeholder="Masukkan angka" name="number_of_users" />

                            @error('number_of_users')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="--bs-modal-footer-border-color: rgba(255,255,255, .125)">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary"
                        onclick="submitForm('#form-createdata')">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create End -->

    @foreach ($gameCategories as $category)
        <!-- Modal Edit Start -->
        <div class="modal fade edit-modal" id="editModal-{{ $category->id }}" tabindex="-1"
            aria-labelledby="editModal-{{ $category->id }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="--bs-modal-header-border-color: rgba(255,255,255, .125)">
                        <h1 class="modal-title fs-5" id="editModal-{{ $category->id }}Label">Ubah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('panel.game-category.update', $category->id) }}"
                            enctype="multipart/form-data" method="POST" id="form-updatedata">
                            @csrf
                            @method('PUT')

                            <div class="mb-4 d-flex flex-column gap-2 form-group">
                                <label for="name">Nama Kategori</label>
                                <input type="text" id="name" value="{{ old('name', $category->name) }}"
                                    class="form-control" placeholder="Masukkan nama kategori" name="name" />

                                @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4 d-flex flex-column gap-2 form-group">
                                <label for="image">Gambar</label>
                                <input type="file" id="image" class="form-control" name="image" />

                                @error('image')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror

                                <div class="mt-3">
                                    <img src="{{ asset("storage/{$category->image}" ?? 'images/preview.jpg') }}"
                                        id="image-preview-create" class="w-100 rounded-3" alt="Preview" />
                                </div>
                            </div>

                            <div class="mb-4 d-flex flex-column gap-2 form-group">
                                <label for="number_of_users">Anggota Per Tim</label>
                                <input type="number"value="{{ old('number_of_users', $category->number_of_users) }}"
                                    id="number_of_users" class="form-control" placeholder="Masukkan angka"
                                    name="number_of_users" />

                                @error('number_of_users')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer" style="--bs-modal-footer-border-color: rgba(255,255,255, .125)">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="submitForm('#form-updatedata')">Simpan
                            Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit End -->
    @endforeach
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
@endsection

@section('script')
    <script>
        $('#createModal input#image, .edit-modal input#image').each((index, el) => {
            $(el).on('change', function() {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(el).parents('.form-group').find('#image-preview-create').attr('src', e.target
                            .result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        })
    </script>

    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn-lg btn btn-success",
                cancelButton: "btn-lg btn btn-danger",
                actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex',
            },
            buttonsStyling: false
        });

        /**
         * Submit Form based on target
         *
         * @params {string} target
         * @returns void
         */
        const submitForm = (target) => $(target).submit();

        const runModalConfirmWithSubmit = (text, formTarget, options) => {
            swalWithBootstrapButtons.fire({
                title: 'Konfirmasi',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                reverseButtons: true,
                ...options
            }).then(({
                isConfirmed
            }) => {
                if (isConfirmed) $(formTarget).submit();
            })
        }
    </script>
@endsection
