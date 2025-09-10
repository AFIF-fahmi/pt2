@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center m-30">
<!-- Area test -->




    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 max-w-[1400px] mx-auto">
        <!-- Virtual Office Card as Component -->
        <x-card-office
            title="Virtual Office"
            price="Mulai Dari IDR 400rb/bln"
            desc="Alamat bisnis prestisius di pusat kota dengan layanan surat menyurat, resepsionis profesional, dan notifikasi dokumen via email/WA"
            img="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3"
            url="{{ url('/layanan/virtual-office') }}"
        />
    </div>




<!-- Akhir area test -->
</div>
@endsection