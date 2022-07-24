@php
    $test = 'QRCode 123'
@endphp
{!! DNS2D::getBarcodeHTML( $test,'QRCODE') !!}

{{-- QRCODE
PHARMA
PHARMA2T
CODABAR
KIX
RMS4CC
UPCA --}}

{{-- run composer require Milon/Barcode
Milon\Barcode\BarcodeServiceProvider::class,
'DNS1D'=>Milon\Barcode\Facades\DNS1DFacade::class,
'DNS2D'=>Milon\Barcode\Facades\DNS2DFacade::class, --}}
