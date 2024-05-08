@extends('layouts.app')

@section('title', 'Turnamen')

@section('links')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('content')
    <section class="pb-120 pt-120 mb-120">
        <div class="container-fluid">
            <div class="row gy-4 mb-6 align-items-center justify-content-between">
                <div class="col-6">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim" style="width: fit-content;">
                        Turnamen
                    </h2>
                </div>
                <div class="col-md-3">
                    <div class="d-flex gap-3">
                        <form action="{{ route('panel.tournament.index') }}" class="d-flex gap-4 align-items-center">
                            <input type="text" class="form-control" name="search" placeholder="Cari turnament&hellip;"
                                value="{{ request()->get('search') }}" />
                            <button class="btn btn-login">Cari</button>
                        </form>

                        @role('eo')
                            <button class="btn btn-primary ms-4">Buat Baru</button>
                        @endrole
                    </div>
                </div>
            </div>

            <div class="pt-8">
                <div class="py-8 px-6 d-none d-md-none d-lg-block border-bottom"
                    style="--bs-border-color: rgba(255,255,255, .125)">
                    <div class="row">
                        <div class="col-md-3">Nama Turnamen</div>
                        <div class="col-md-3">Tanggal</div>
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-2">Berbayar / Gratis</div>
                        <div class="col-md-2">Aksi / Status</div>
                    </div>
                </div>
                @forelse ($tournaments as $index => $tournament)
                    <div class="py-8 px-0 px-lg-6 {{ $tournaments->count() === ++$index ? '' : 'border-bottom' }}"
                        style="--bs-border-color: rgba(255,255,255, .125)">
                        <div class="row gy-4 align-items-center">
                            <div class="h-100 col-md-3">
                                <div class="d-flex gap-6 align-items-center">
                                    <div class="ratio ratio-1x1 overflow-hidden rounded-4"
                                        style="height: 5rem;width: 5rem;">
                                        <img src="{{ $tournament->poster_image }}" alt="{{ $tournament->name }}" />
                                    </div>

                                    <a href="{{ route('panel.tournament.show', $tournament->id) }}">
                                        <h3 class="mb-0">{{ $tournament->name }}</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="h-100 col-md-3">
                                <div class="mb-4">
                                    <h6 class="mb-1">Pendaftaran</h6>
                                    <div class="text-muted">{{ $tournament->registration_open->isoFormat('DD MMMM YYYY') }}
                                        &mdash;
                                        {{ $tournament->registration_close->isoFormat('DD MMMM YYYY') }}</div>
                                </div>
                                <div>
                                    <h6 class="mb-1">Perlombaan</h6>
                                    <div class="text-muted">{{ $tournament->event_start->isoFormat('DD MMMM YYYY') }}
                                        &mdash;
                                        {{ $tournament->event_end->isoFormat('DD MMMM YYYY') }}</div>
                                </div>
                            </div>
                            <div class="h-100 col-md-2">
                                {{ $tournament->gameCategory->name }}
                            </div>
                            <div class="h-100 col-md-2">
                                <div class="d-flex gap-3 flex-wrap">
                                    @if ($tournament->event_type == TournamentTypeEnum::FREE->value)
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-4 rounded-3 h-100"
                                            style="width: fit-content;">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Gratis</span>
                                        </div>
                                    @elseif($tournament->event_type == TournamentTypeEnum::PAID->value)
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-4 rounded-3 h-100"
                                            style="width: fit-content;">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Berbayar</span>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-4 rounded-3 h-100"
                                            style="width: fit-content;">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">@currency($tournament->registration_price)</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="h-100 col-md-2">
                                @role(['admin', 'eo'])
                                    @if ($tournament->status === TournamentApprovalStatusEnum::PENDING->value)
                                        <form method="POST" action="{{ route('panel.tournament.update', $tournament->id) }}"
                                            id="approving-form-{{ $tournament->id }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" value="approving" name="requesting" />
                                            <input type="hidden" name="status"
                                                value="{{ TournamentApprovalStatusEnum::APPROVED->value }}">
                                        </form>
                                        <form method="POST" action="{{ route('panel.tournament.update', $tournament->id) }}"
                                            id="rejecting-form-{{ $tournament->id }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" value="approving" name="requesting" />
                                            <input type="hidden" name="status"
                                                value="{{ TournamentApprovalStatusEnum::REJECTED->value }}">
                                        </form>

                                        <div class="d-flex gap-3">
                                            <button class="btn-lg btn btn-success"
                                                onclick="runModalConfirmWithSubmit('Apakah kamu ingin menerima pengajuan turnamen ini?', '#approving-form-{{ $tournament->id }}', {customClass: {actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex', confirmButton: 'btn-lg btn btn-success', cancelButton: 'btn-lg btn btn-light'}})">Terima</button>
                                            <button class="btn-lg btn btn-danger"
                                                onclick="runModalConfirmWithSubmit('Apakah kamu ingin menolak pengajuan turnamen ini?', '#rejecting-form-{{ $tournament->id }}', {customClass: {actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex', confirmButton: 'btn-lg btn btn-danger', cancelButton: 'btn-lg btn btn-light'}})"">Tolak</button>
                                        </div>
                                    @else
                                        <div class="d-flex gap-3 align-items-center">

                                            <button class="btn-lg btn btn-danger"
                                                onclick="runModalConfirmWithSubmit('Apakah kamu ingin menghapus pengajuan turnamen ini?', '#deleting-form-{{ $tournament->id }}', {customClass: {actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex', confirmButton: 'btn-lg btn btn-danger', cancelButton: 'btn-lg btn btn-light'}})">
                                                <div class="ti ti-trash"></div>
                                            </button>

                                            <strong>{{ $tournament->getStatus()->label() }}</strong>

                                            <form method="POST"
                                                action="{{ route('panel.tournament.destroy', $tournament->id) }}"
                                                id="deleting-form-{{ $tournament->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    @endif
                                @endrole
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="row justify-content-center py-8 px-0 px-lg-6">
                        <div class="col-6">
                            <div class="text-center">
                                @include('components.empty-state')

                                @role('eo')
                                    <button class="btn btn-primary mt-6">Buat Baru</button>
                                @endrole
                            </div>
                        </div>
                    </div>
                @endforelse

                {{ $tournaments->links() }}
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
@endsection

@section('script')
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn-lg btn btn-success",
                cancelButton: "btn-lg btn btn-danger",
                actions: 'gap-3 flex-column-reverse flex-lg-row align-items-stretch align-items-lg-center w-100 px-3 px-md-0 justify-content-stretch justify-content-lg-center d-flex',
            },
            buttonsStyling: false
        });

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
