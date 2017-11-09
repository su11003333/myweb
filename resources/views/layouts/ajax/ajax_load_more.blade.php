@foreach($works as $work)

    <div class="cbp-item {{$work->workscategories->id}}">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="{{$work->banner}}" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="{{url('/ajax-work-template/'.$work->id)}}" class="cbp-singlePageInline cbp-l-caption-buttonLeft" rel="nofollow">Info</a>
                        <a href="{{route('home.work',$work->id)}}" target="_blank" class=" cbp-l-caption-buttonRight" >More detail</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{route('home.work',$work->id)}}" target="_blank" class=" cbp-l-grid-masonry-projects-title" rel="nofollow">{{$work->title}}</a>
        <div class="cbp-l-grid-masonry-projects-desc">{!! $work->intro !!}</div>
    </div>

@endforeach