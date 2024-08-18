<div class="card py-5 col-4 offset-4">
    <div class="card-body">
        <livewire:flash-message />
        <h5 class="card-title text-center">Login</h5>
        <form wire:submit="login">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>

            </div>
        </form>
    </div>
</div>
