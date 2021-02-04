<?php

namespace App\Http\Livewire;

use App\Models\Hizmet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rezervasyon extends Component
{
    public $record,$hizmet_id,$name,$phone,$talephizmet,$tarih,$saat,$Not;

    public function mount($id)
    {
        $this->record = Hizmet::findOrFail($id);
        $this->hizmet_id = $this->record->id;
    }
    public function render()
    {
        $data = Hizmet::select('title')->get();

        return view('livewire.rezervasyon',['data'=>$data]);
    }
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
        $this->talephizmet = null;
        $this->tarih = null;
        $this->saat = null;
        $this->Not = null;
        $this->hizmet_id = null;
    }



    public function store()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'talephizmet' => 'required',
            'tarih' => 'required',
            'saat' => 'required',
            'Not' => 'required'

        ]);

        \App\Models\Rezervasyon::create([
            'hizmet_id' =>$this->hizmet_id,
            'user_id' => Auth::id(),
            'name' =>$this->name,
            'phone' =>$this->phone,
            'talephizmet' =>$this->talephizmet,
            'tarih' =>$this->tarih,
            'saat' =>$this->saat,
            'Not' =>$this->Not

        ]);

        session()->flash('message', 'Rezervasyon Talebiniz Alınmıştır.');
        $this->resetInput();
    }

}
