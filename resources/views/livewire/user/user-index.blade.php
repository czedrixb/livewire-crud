<div class="card col-6 offset-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        Users
        <button wire:navigate href="/users/create" class="btn btn-success btn-sm">Create User</button>
    </div>
    <div class="card-body">
        <livewire:flash-message />
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="flex-column">
                            <button wire:navigate href="/users/{{ $user->id }}/show"
                                class="btn btn-success btn-sm">View</button>
                            <button wire:navigate href="/users/{{ $user->id }}/edit"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#asd">Delete</button>

                            <div class="modal fade" id="asd" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure do y ou want to delete this user?
                                        </div>
                                        <div class="modal-footer border-top-0">
                                            <button type="button" class="btn btn-outline-secondary btn-sm"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" wire:click="delete({{ $user->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
