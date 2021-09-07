@foreach($children as $subcategory)
    <li class="dropdown-menu-right">
    @if(count($subcategory->children))
        <li class="dropdown-menu-right"><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}<i class="icon-angle-right"></i></a>
            <ul class="dropdown-menu sub-menu">
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
        </li>
    @else
        <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>

        @endif

   </li>

@endforeach
