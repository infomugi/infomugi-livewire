<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vaksinasi as Model;


class Vaksinasi extends Component
{
    use WithPagination;
    
    public $paginate = 10;
    
    public $tanggal;
    public $provinsi;
    public $kabupaten;
    public $kode_kecamatan;
    public $kecamatan;
    public $faskes;
    public $nik;
    public $nama;
    public $jk;
    public $kelompok_usia;
    public $kategori;
    public $sub_kategori;
    public $vaksinasi;
    public $tiket_vaksinasi;
    public $jenis_vaksin;
    
    
    public $mode = 'create';
    
    public $showForm = false;
    
    public $primaryId = null;
    
    public $search;
    
    public $showConfirmDeletePopup = false;
    
    protected $rules = [
        'tanggal' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'kode_kecamatan' => 'required',
        'kecamatan' => 'required',
        'faskes' => 'required',
        'nik' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'kelompok_usia' => 'required',
        'kategori' => 'required',
        'sub_kategori' => 'required',
        'vaksinasi' => 'required',
        'tiket_vaksinasi' => 'required',
        'jenis_vaksin' => 'required',
        
    ];
    
    
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,'rules');
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $model = Model::where('nama', 'like', '%'.$this->search.'%')->orWhere('nik', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        // $model = Model::where('tanggal', 'like', '%'.$this->search.'%')->orWhere('provinsi', 'like', '%'.$this->search.'%')->orWhere('kabupaten', 'like', '%'.$this->search.'%')->orWhere('kode_kecamatan', 'like', '%'.$this->search.'%')->orWhere('kecamatan', 'like', '%'.$this->search.'%')->orWhere('faskes', 'like', '%'.$this->search.'%')->orWhere('nik', 'like', '%'.$this->search.'%')->orWhere('nama', 'like', '%'.$this->search.'%')->orWhere('jk', 'like', '%'.$this->search.'%')->orWhere('kelompok_usia', 'like', '%'.$this->search.'%')->orWhere('kategori', 'like', '%'.$this->search.'%')->orWhere('sub_kategori', 'like', '%'.$this->search.'%')->orWhere('vaksinasi', 'like', '%'.$this->search.'%')->orWhere('tiket_vaksinasi', 'like', '%'.$this->search.'%')->orWhere('jenis_vaksin', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('livewire.master.vaksinasi', [
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
        
        $this->tanggal= $model->tanggal;
        $this->provinsi= $model->provinsi;
        $this->kabupaten= $model->kabupaten;
        $this->kode_kecamatan= $model->kode_kecamatan;
        $this->kecamatan= $model->kecamatan;
        $this->faskes= $model->faskes;
        $this->nik= $model->nik;
        $this->nama= $model->nama;
        $this->jk= $model->jk;
        $this->kelompok_usia= $model->kelompok_usia;
        $this->kategori= $model->kategori;
        $this->sub_kategori= $model->sub_kategori;
        $this->vaksinasi= $model->vaksinasi;
        $this->tiket_vaksinasi= $model->tiket_vaksinasi;
        $this->jenis_vaksin= $model->jenis_vaksin;
        
        
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
        
        $model->tanggal= $this->tanggal;
        $model->provinsi= $this->provinsi;
        $model->kabupaten= $this->kabupaten;
        $model->kode_kecamatan= $this->kode_kecamatan;
        $model->kecamatan= $this->kecamatan;
        $model->faskes= $this->faskes;
        $model->nik= $this->nik;
        $model->nama= $this->nama;
        $model->jk= $this->jk;
        $model->kelompok_usia= $this->kelompok_usia;
        $model->kategori= $this->kategori;
        $model->sub_kategori= $this->sub_kategori;
        $model->vaksinasi= $this->vaksinasi;
        $model->tiket_vaksinasi= $this->tiket_vaksinasi;
        $model->jenis_vaksin= $this->jenis_vaksin;
        $model->save();
        
        $this->resetForm();
        $this->emit("hideForm");
        session()->flash('message', 'Record Saved Successfully');
        $this->showForm = false;
        
    }
    
    public function resetForm()
    {
        $this->tanggal= "";
        $this->provinsi= "";
        $this->kabupaten= "";
        $this->kode_kecamatan= "";
        $this->kecamatan= "";
        $this->faskes= "";
        $this->nik= "";
        $this->nama= "";
        $this->jk= "";
        $this->kelompok_usia= "";
        $this->kategori= "";
        $this->sub_kategori= "";
        $this->vaksinasi= "";
        $this->tiket_vaksinasi= "";
        $this->jenis_vaksin= "";
        
    }
    
    
    public function update()
    {
        $this->validate();
        
        $model = Model::find($this->primaryId);
        
        $model->tanggal= $this->tanggal;
        $model->provinsi= $this->provinsi;
        $model->kabupaten= $this->kabupaten;
        $model->kode_kecamatan= $this->kode_kecamatan;
        $model->kecamatan= $this->kecamatan;
        $model->faskes= $this->faskes;
        $model->nik= $this->nik;
        $model->nama= $this->nama;
        $model->jk= $this->jk;
        $model->kelompok_usia= $this->kelompok_usia;
        $model->kategori= $this->kategori;
        $model->sub_kategori= $this->sub_kategori;
        $model->vaksinasi= $this->vaksinasi;
        $model->tiket_vaksinasi= $this->tiket_vaksinasi;
        $model->jenis_vaksin= $this->jenis_vaksin;
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
