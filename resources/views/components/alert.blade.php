@php
    $array = [
        'error' => [
            'class' => 'bg-danger',
            'title' => 'Galat',
        ],
        'success' => [
            'class' => 'bg-success',
            'title' => 'Berhasil',
        ],
        'warn' => [
            'class' => 'bg-warning',
            'title' => 'Peringatan',
        ],
        'info' => [
            'class' => 'bg-info',
            'title' => 'Informasi',
        ],
    ];
@endphp

@foreach ($array as $index => $array)
    @if(session($index))
    <div class="alert bg-{{ $array['class'] }}">
        <h3>{{ $array['title'] }}</h3>
        {{ session($index) }}
    </div>
    @endif
@endforeach

@if($errors->all())
<div class="alert bg-danger">
    <h3>Galat</h3>
    <p class="mb-3">Mohon periksa kesalahan berikut dan segera perbaiki!</p>

    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif
