@foreach([
'primary', 'secondary', 'success', 'danger',
 'warning', 'info', 'light', 'dark',
] as $msg)
    @if(session()->has($msg))
        <div class="messages mt-4">
            <div class="alert alert-{{ $msg }}"> {{ session()->get($msg) }}</div>
        </div>
    @endif
@endforeach