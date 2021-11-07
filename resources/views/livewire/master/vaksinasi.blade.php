@section('pageTitle', 'Kelola Vaksinasi')

<div>
    @if (session()->has('message'))
    <div class="flex mx-auto">
        <div class="alert alert-success">
            <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
            </span>
            <button wire:click="clearFlash()"
            class="float-right btn-xs btn btn-outline-success">
            <span>×</span>
        </button>
    </div>
</div>
@endif
<div>
    <div class="row">
        <div class="col-md-3">
            <input wire:model="search"
            class="form-control form-control-solid w-250px ps-15"
            placeholder="Cari Vaksinasi"
            id="search" type="text" name="search" wire:model="search" required="required"
            autofocus="autofocus"/>
        </div>
        <div class="col-md-9 float-right">
            <button type="button"
            class="btn btn-primary float-right"
            wire:click="create">
            {{ __('Add New Record') }}
        </button>
    </div>
</div>
</div>
<div class="flex row card">
    <div class="card-body">
        <table width="100%" class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>TANGGAL
                    </th>
                    
                    <th>KODE KECAMATAN
                    </th>
                    
                    <th>FASKES
                    </th>
                    
                    <th>NIK
                    </th>
                    
                    <th>NAMA
                    </th>
                    
                    <th>JK
                    </th>
                    
                    <th>KELOMPOK USIA
                    </th>
                    
                    <th>KATEGORI
                    </th>
                    
                    <th>SUB KATEGORI
                    </th>
                    
                    <th>VAKSINASI
                    </th>
                    
                    <th>TIKET VAKSINASI
                    </th>
                    
                    <th>JENIS VAKSIN
                    </th>
                    
                    
                    
                    <th scope="col">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($rows as $row)
                <tr> <td>{{ $row->tanggal}}</td>
                    
                    <td>{{ $row->kode_kecamatan}}</td>
                    
                    <td>{{ $row->faskes}}</td>
                    
                    <td>{{ $row->nik}}</td>
                    
                    <td>{{ $row->nama}}</td>
                    
                    <td>{{ $row->jk}}</td>
                    
                    <td>{{ $row->kelompok_usia}}</td>
                    
                    <td>{{ $row->kategori}}</td>
                    
                    <td>{{ $row->sub_kategori}}</td>
                    
                    <td>{{ $row->vaksinasi}}</td>
                    
                    <td>{{ $row->tiket_vaksinasi}}</td>
                    
                    <td>{{ $row->jenis_vaksin}}</td>
                    
                    <td>
                        <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})"> <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg></a>
                    </td></tr>@empty  <tr><td>No Records Found</td></tr>   @endforelse
                    
                </tbody>
            </table>
            <div class="p-2">
                {{ $rows->links() }}
            </div>
        </div>
        
        
    </div>
    
    
    {{--    create / edit form --}}
    
    <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Add New Record' : 'Update Record ' }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class='form-group'><label for='tanggal'>Tanggal</label><input type='text' class='form-control @error('tanggal')  is-invalid @enderror' wire:model='tanggal'>@error('tanggal')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='kode_kecamatan'>Kode kecamatan</label><input type='text' class='form-control @error('kode_kecamatan')  is-invalid @enderror' wire:model='kode_kecamatan'>@error('kode_kecamatan')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='faskes'>Faskes</label><input type='text' class='form-control @error('faskes')  is-invalid @enderror' wire:model='faskes'>@error('faskes')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='nik'>Nik</label><input type='text' class='form-control @error('nik')  is-invalid @enderror' wire:model='nik'>@error('nik')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='nama'>Nama</label><input type='text' class='form-control @error('nama')  is-invalid @enderror' wire:model='nama'>@error('nama')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='jk'>Jk</label><input type='text' class='form-control @error('jk')  is-invalid @enderror' wire:model='jk'>@error('jk')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='kelompok_usia'>Kelompok usia</label><input type='text' class='form-control @error('kelompok_usia')  is-invalid @enderror' wire:model='kelompok_usia'>@error('kelompok_usia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='kategori'>Kategori</label><input type='text' class='form-control @error('kategori')  is-invalid @enderror' wire:model='kategori'>@error('kategori')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='sub_kategori'>Sub kategori</label><input type='text' class='form-control @error('sub_kategori')  is-invalid @enderror' wire:model='sub_kategori'>@error('sub_kategori')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='vaksinasi'>Vaksinasi</label><input type='text' class='form-control @error('vaksinasi')  is-invalid @enderror' wire:model='vaksinasi'>@error('vaksinasi')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='tiket_vaksinasi'>Tiket vaksinasi</label><input type='text' class='form-control @error('tiket_vaksinasi')  is-invalid @enderror' wire:model='tiket_vaksinasi'>@error('tiket_vaksinasi')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='jenis_vaksin'>Jenis vaksin</label><input type='text' class='form-control @error('jenis_vaksin')  is-invalid @enderror' wire:model='jenis_vaksin'>@error('jenis_vaksin')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                        {{ $mode == 'create' ? 'Save Record' : 'Update Record' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    /create /edit form--}}
    
    
    {{--    delete popup--}}
    <div wire:ignore>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This Action Can not be Undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" wire:click="destroy()" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    /delete popup--}}
</div>
