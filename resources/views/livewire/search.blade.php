<div>
    <input wire:model="search" name="search" style="height: 50px; width: 300px;" type="text" list="mylist" placeholder="Aranacak Metin..">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
            <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
