@if($menu && $menu[0]['items'])
<div class="header-nav-area d-none d-lg-block sticky-nav">
    <div class="container">
        <div class="header-nav">
            <div class="main-menu position-relative">
                <ul>
                @foreach($menu[0]['items'] as $item)
                    {{
                        $jsonItems = json_decode($item['items']);
                    }}

                    @if( count($jsonItems) > 0 && $jsonItems != NULL)
                        <li class="dropdown">
                            <a href="#">
                                {{ $item['name'] }} <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu">
                              @foreach($jsonItems as $child)
                                <li><a href="{{$child->link}}">{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li>
                            <a href="{{$item['link']}}">
                                {{$item['name']}}
                            </a>
                        </li>
                        @endif
                     
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</div>
@endif
