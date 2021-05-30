<div>
    <h1>Ini Livewire Componen Staf</h1><br>
    <div class="class col-sm-16">
        <div class="card">
            <div class="card-header">
                Input Data Staf
            </div>

            <div class="card-body">

                <form wire:submit.prevent="SimpanData">
                    <div class="mb-3">
                        <label>Nama Staf</label>
                        <input wire:model="nama" class="form-control">
                        @error('nama')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Alamat Email</label>
                        <input wire:model="email" class="form-control">
                        @error('email')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Nomor Handphone</label>
                        <input wire:model="no_handphone" class="form-control">
                        @error('no_handphone')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    {{ $sukses }}
                </form>

            </div>
        </div>
    </div>
</div>