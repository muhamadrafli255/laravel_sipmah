@include('components.styles.main')
<h1 class="text-center">Aktivasi Akun SIPMah</h1>
<a href="{{ env('APP_URL') }}/activation/{{ $token }}" class="btn btn-primary">Aktivasi</a>
@include('components.scripts.main')