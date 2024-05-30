<ul class="sub-menu">
    @foreach($catalog as $category)
    <li>
        <a href="{{$category['code']}}">{{$category['title']}}</a>
        @if($category['children_categories'])
        <ul>
            @foreach($category['children_categories'] as $child)
                <li>
                    <a href="{{$child['code']}}">
                        {{$child['title']}}
                    </a>
                </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>
