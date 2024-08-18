<div>
    @if (session()->has('success'))
        <div class="alert alert-success py-3">
            {{ session('success') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger py-3">
            {{ session('error') }}
        </div>
    @endif
</div>
