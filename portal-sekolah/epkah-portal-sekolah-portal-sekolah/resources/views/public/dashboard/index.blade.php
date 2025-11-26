@extends('layouts.layoutDashboard')

@section('title', 'e-PKAH | Dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/sekolah/dashboard.css') }}">
@endpush

@section('content')
  {{-- Navbar --}}
  @include('partials._navbar')

  {{-- Header --}}
  @include('partials._header')

  {{-- Seksyen lain --}}
  @include('public.dashboard.pencapaian')
  @include('public.dashboard.jenis-sisa')
  @include('public.dashboard.testimoni')
  @include('public.dashboard.sertai-kami')

  {{-- Footer --}}
  @include('partials._footer')
@endsection

@push('scripts')
<script src="{{ asset('js/sekolah/dashboard.js') }}"></script>
@endpush
