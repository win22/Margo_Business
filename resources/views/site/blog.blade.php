@extends('site.layout')
@section('content')
<div class="tg-blogpost tg-blogpostvtwo tg-blogpostvfive tg-bglight reveal">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 reveal-2">
        @foreach($blogs as $blog)
        <article class="tg-post">
            <figure>
                                    <span class="tg-postcategory">
                                        @if($blog->type == 1)
                                        Read
                                        @else
                                        Vidéo
                                        @endif
                                    </span>
                <img style="height: 368px" src="{{ asset('storage/'.$blog->image) }}"
                     alt="image description">
                <figcaption>
                    <div class="tg-postcontent">
                        <div class="tg-posttitle">
                            <h3><a href="#">{{ $blog->name }}</a></h3>
                        </div>
                        <div class="tg-description">
                            <p>{{ $blog->description }}</p>
                        </div>
                        <ul class="tg-postmetadata">
                            <li>
                                <span>By <a href="#">{{ $blog->user->name }}</a></span>
                            </li>
                            <li>
                                <p hidden>   {{ \Carbon\Carbon::setLocale('fr') }}</p>
                                <time datetime="2017-07-07">{{
                                    \Carbon\Carbon::parse($blog['created_at'])->diffForHumans()
                                    }}</time>
                            </li>
                        </ul>
                    </div>
                </figcaption>
                @if($blog->type == 1)
                <a class="tg-btnplay" href="{{ URL::to($blog->link) }}"
                   data-rel="prettyPhoto[video]"><i class="icon-play3"></i></a>
                @endif
            </figure>
        </article>
        @endforeach

    </div>
    <div class="tg-paginationarea tg-paginationareavtwo">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="tg-pagination">

            </nav>
        </div>
    </div>
</div>

@endsection
