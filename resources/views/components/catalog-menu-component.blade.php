<ul class="sub-menu">
    @foreach($catalog as $category)
    <li>
        <a href="{{ route('catalog.detail', ['code'=>$category['code']])}}">{{$category['title']}}</a>
        @if($category['children_categories'])
        <ul>
            @foreach($category['children_categories'] as $child)
                <li>
                    <a href="{{ route('catalog.detail', ['code'=>$child['code']]) }}">
                        {{$child['title']}}
                    </a>
                </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>
