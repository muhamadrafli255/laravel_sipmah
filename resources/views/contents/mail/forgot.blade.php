@include('components.styles.main')
<h1 class="text-center">Atur ulang kata sandi</h1>
<a href="{{ env('APP_URL') }}/reset-password/{{ $token }}" class="btn btn-primary">Atur ulang</a>
@include('components.scripts.main')