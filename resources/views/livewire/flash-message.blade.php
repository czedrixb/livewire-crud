<div>
    @if (session()->has('success'))
        <div class="alert alert-success py-3">
            {{ session('success') }}
        </div>
    @endif
</div>
