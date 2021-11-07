<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Division as Model;


class Division extends Component
{
    use WithPagination;
    
    public $paginate = 10;
    
    public $name;
    public $description;
    public $status;
    public $type;
    
    
    public $mode = 'create';
    
    public $showForm = true;
    
    public $primaryId = null;
    
    public $search;
    
    public $showConfirmDeletePopup = true;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'status' => 'required',
        'type' => 'required',
        
    ];
    
    
    
    public function updated($propertyName,$rules)
    {
        $this->validateOnly($propertyName,$rules);
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $model = Model::where('name', 'like', '%'.$this->search.'%')->orWhere('description', 'like', '%'.$this->search.'%')->orWhere('status', 'like', '%'.$this->search.'%')->orWhere('type', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.master.division', [
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
        $this->description= $model->description;
        $this->status= $model->status;
        $this->type= $model->type;
        
        
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
        $this->validate();
        
        $model = new Model();
        
        $model->name= $this->name;
        $model->description= $this->description;
        $model->status= $this->status;
        $model->type= $this->type;
        $model->save();
        
        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;
        
    }
    
    public function resetForm()
    {
        $this->name= "";
        $this->description= "";
        $this->status= "";
        $this->type= "";
        
    }
    
    
    public function update()
    {
        $this->validate();
        
        $model = Model::find($this->primaryId);
        
        $model->name= $this->name;
        $model->description= $this->description;
        $model->status= $this->status;
        $model->type= $this->type;
        $model->save();
        
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
