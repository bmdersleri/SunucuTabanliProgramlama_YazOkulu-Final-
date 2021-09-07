<div class="wrap">
<div class="header_slide">
    <div class="header_bottom_left">
        @php
            $parentCategories=\App\Http\Controllers\HomeController::categoryList();
        @endphp
        <div class="categories">
            <ul>
                <h3>Kategoriler</h3>
                @foreach($parentCategories as $rs)
                    <li><a href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                        <ul class="dropdown-menu-right">

                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>






