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
            class="form-control"
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
                    
                    <th>NAME
                    </th>
                    
                    <th>ADDRESS
                    </th>
                    
                    <th>PHONE
                    </th>
                    
                    <th>EMAIL
                    </th>
                    
                    
                    <th scope="col">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($rows as $row)
                <tr> <td>{{ $row->name}}</td>
                    
                    <td>{{ $row->address}}</td>
                    
                    <td>{{ $row->phone}}</td>
                    
                    <td>{{ $row->email}}</td>
                    
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
                    <div class='form-group'><label for='name'>Name</label><input type='text' class='form-control @error('name')  is-invalid @enderror' wire:model='name'>@error('name')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='address'>Address</label><input type='text' class='form-control @error('address')  is-invalid @enderror' wire:model='address'>@error('address')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='phone'>Phone</label><input type='text' class='form-control @error('phone')  is-invalid @enderror' wire:model='phone'>@error('phone')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    <div class='form-group'><label for='email'>Email</label><input type='email' class='form-control @error('email')  is-invalid @enderror' wire:model='email'>@error('email')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                    
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
