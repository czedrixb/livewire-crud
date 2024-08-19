<div class="card col-6 offset-3">
    <div class="card-header">
        Create User
    </div>
    <div class="card-body">
        <form wire:submit="store">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="d-flex justify-content-end gap-2">
                <button wire:navigate href="/users" class="btn btn-outline-secondary btn-sm">Back</button>
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </form>
    </div>
</div>
