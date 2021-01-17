<ul>
@foreach($children as $subcategory)

        @if(count($subcategory->children))
            <li style="width:168px;top:5px;" class="nav-item">{{$subcategory->title}}</li>
                <ul>
                    @include('home.categorytree',['children'=>$subcategory->children])

                </ul>
            <hr>

        @else
            <li  class="nav-item"><a class="nav-link" href="#">->{{$subcategory->title}}</a></li>
        @endif

@endforeach
</ul>
