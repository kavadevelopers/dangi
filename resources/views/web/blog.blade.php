@extends('web.layouts.main')

@section('content')

<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/bg-blog.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>Blog</h2>
        </div>
    </div>
</section>

<section class="section section-50 section-md-75 section-xl-100">
    <div class="container">
        <div class="row row-30 justify-content-md-center justify-content-lg-start">
            @foreach ($list as $item)
                <div class="col-md-9 col-lg-6 height-fill">
                    <article class="post-block">
                        <div class="post-image"><img src="{{ CommonHelper::getBlogBanner($item->banner) }}" alt="" width="570" height="253"/>
                        </div>
                        <div class="post-body">
                            <h4 class="post-header"><a href="{{ url('blog/'.$item->slug) }}">{{ CommonHelper::read_more_hide($item->title,45) }}</a></h4>
                            <ul class="post-meta">
                                <li class="object-inline"><span class="text-style-2">by</span><span>{{ CommonHelper::read_more_hide($item->posted_by,15) }}</span></li>
                                <li class="object-inline"><span class="novi-icon icon icon-xxs icon-white material-icons-query_builder"></span>
                                    <time datetime="2022-01-01">{{ CommonHelper::dateFormat($item->created_at,'d M Y') }}</time>
                                </li>
                                <li class="object-inline">
                                    <span class="novi-icon icon icon-xxs icon-white material-icons-loyalty"></span>
                                    <ul class="list-tags-inline">
                                        <li>{{ CommonHelper::read_more_hide($item->category,15) }}</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>    
            @endforeach
        </div>
    </div>
</section>



@stop