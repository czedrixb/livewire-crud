<div class="card col-6 offset-3 ">
    <div class="card-header d-flex justify-content-between align-items-center">
        User ID #{{ $user->id }}
    </div>
    <div class="card-body">
        <div class="mb-3">
            Name: {{ $user->name }}
        </div>
        <div class="mb-3">
            Email: {{ $user->email }}
        </div>
        <div class="text-end">
            <button wire:navigate href="/users" class="btn btn-outline-secondary btn-sm">Back</button>
        </div>
    </div>
</div>
