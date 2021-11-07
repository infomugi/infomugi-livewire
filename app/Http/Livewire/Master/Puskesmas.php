<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Puskesmas as Model;


class Puskesmas extends Component
{
    use WithPagination;
    
    public $paginate = 10;
    
    public $name;
    public $address;
    public $phone;
    public $email;
    public $status;
    
    
    public $mode = 'create';
    
    public $showForm = true;
    
    public $primaryId = null;
    
    public $search;
    
    public $showConfirmDeletePopup = true;
    
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'status' => 'required',
        
    ];
    
    
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required',
            'address' => 'required',
        ]);
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $model = Model::where('name', 'like', '%'.$this->search.'%')->orWhere('address', 'like', '%'.$this->search.'%')->orWhere('phone', 'like', '%'.$this->search.'%')->orWhere('email', 'like', '%'.$this->search.'%')->orWhere('status', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.master.puskesmas', [
            'rows'=> $model
        ]);
    }
    
    
    public function create ()
    {
        $this->mode = 'create';
        $this->resetForm();
        $this->showForm = true;
        
        $this->emit("showForm");
    }
    
    
    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = Model::find($primaryId);
        
        $this->name= $model->name;
        $this->address= $model->address;
        $this->phone= $model->phone;
        $this->email= $model->email;
        $this->status= $model->status;
        
        
        $this->emit("showForm");
        $this->showForm = true;
    }
    
    public function closeForm()
    {
        $this->showForm = false;
        
        $this->emit("hideForm");
    }
    
    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
        
        $model = new Model();
        
        $model->name= $this->name;
        $model->address= $this->address;
        $model->phone= $this->phone;
        $model->email= $this->email;
        $model->status= 1;
        $model->save($validatedData);
        
        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;
        
    }
    
    public function resetForm()
    {
        $this->name= "";
        $this->address= "";
        $this->phone= "";
        $this->email= "";
        $this->status= "";
        
    }
    
    
    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
        
        $model = Model::find($this->primaryId);
        
        $model->name= $this->name;
        $model->address= $this->address;
        $model->phone= $this->phone;
        $model->email= $this->email;
        $model->status= 1;
        $model->save($validatedData);
        
        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Updated Successfully');
    }
    
    public function confirmDelete($primaryId)
    {
        $this->primaryId = $primaryId;
        $this->showConfirmDeletePopup = true;
        $this->emit('showConfirmDelete');
    }
    
    public function hideConfirmationModal()
    {
        $this->emit('hideConfirmDelete');
    }
    
    public function destroy()
    {
        Model::find($this->primaryId)->delete();
        $this->showConfirmDeletePopup = false;
        $this->emit('hideConfirmDelete');
        session()->flash('message', 'Record Deleted Successfully');
    }
    
    public function clearFlash()
    {
        session()->forget('message');
    }
    
}
