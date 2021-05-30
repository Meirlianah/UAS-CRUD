<div>
    <h1>Ini Livewire Componen User</h1>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            Data User
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                Add User
            </button>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($user as $data)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->password }}</td>
                        <td>
                            <button wire:click.prevent="DetailData({{ $data->id }})" class="btn btn-sm btn-warning"
                                data-toggle="modal" data-target="#edituser">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- Modal Add-->
    <div wire:ignore.self class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" wire:model="name" class="form-control">
                            @error('name')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" wire:model="email" class="form-control">
                            @error('email')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" wire:model="password" class="form-control">
                            @error('password')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>
                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="SimpanData()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div wire:ignore.self class="modal fade" id="edituser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <input name="id" wire:model="ids" class="form-control">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" wire:model="name" class="form-control">
                            @error('name')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" wire:model="email" class="form-control">
                            @error('email')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" wire:model="password" class="form-control">
                            @error('password')
                            <label class="text-danger">
                                {{ $message }}
                            </label>
                            @enderror
                        </div>
                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="SimpanData()">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Delete-->






    <script>
    window.livewire.on('adduser', () => {
        $('#adduser').modal('hide');
    });
    </script>
</div>