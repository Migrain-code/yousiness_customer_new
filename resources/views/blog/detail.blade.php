@extends('layouts.master')
@section('meta_keys', config('settings.meta_keywords'))
@section('meta_description', config('settings.meta_description'))
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Ansayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog İçeriği</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Blog detayı</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content" style="min-height: 264.8px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-view">
                        <div class="blog blog-single-post">
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img alt="" src="{{image($blog->image)}}" class="img-fluid"></a>
                            </div>
                            <h3 class="blog-title">{{$blog->title}}</h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                <a href="#">
                                                    <img src="{{image(setting('speed_favicon'))}}" alt="" class="me-2">
                                                    <span>Admin</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-calendar"></i>{{$blog->created_at->format('d.m.Y')}}</li>
                                        <li><i class="far fa-comments"></i>{{$blog->comments->count()}} Yorum</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                {!! $blog->description !!}
                            </div>
                        </div>

                        <div class="card blog-share clearfix" style="border-radius: 18px">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Paylaş</h4>
                            </div>
                            <div class="card-body">
                                <ul class="social-share">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{route('blog.detail', $blog->slug)}}" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{route('blog.detail', $blog->slug)}}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)" link="{{route('blog.detail', $blog->slug)}}" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)" link="{{route('blog.detail', $blog->slug)}}" class="social-link" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card blog-comments clearfix" style="border-radius: 18px">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Yorumlar ({{$blog->comments->count()}})</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="comments-list">
                                    @forelse($blog->comments as $comment)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="{{asset($comment->business->logo)}}">
                                                </div>
                                                <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">{{$comment->business->name}}</span>
													</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <p class="blog-date">{{$blog->created_at->translatedFormat('d F Y')}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right">
                    <!-- Categories -->
                    <div class="card category-widget" style="border-radius: 18px;">
                        <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                            <h4 class="card-title">Konu Başlıkları</h4>
                        </div>
                        <div class="card-body">
                            <ul class="categories">
                                @forelse($heads as $head)
                                    <li><a href="#head-{{$loop->index}}">{{$head}} </a></li>
                                @empty
                                @endforelse

                            </ul>
                        </div>
                    </div>
                    <!-- /Categories -->
                    <!-- Latest Posts -->
                    <div class="card post-widget" style="border-radius: 18px">
                        <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                            <h4 class="card-title">Son Gönderiler</h4>
                        </div>
                        <div class="card-body">
                            <ul class="latest-posts">
                                @forelse($blogs as $row)
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{route('blog.detail', $row->slug)}}">
                                                <img class="img-fluid" src="{{asset($row->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h4>
                                                <a href="{{route('blog.detail', $row->slug)}}">{{$row->title}}</a>
                                            </h4>
                                            <p>{{$row->created_at->translatedFormat('d F Y')}}</p>
                                        </div>
                                    </li>
                                @empty

                                @endforelse

                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->
                </div>
                <!-- /Blog Sidebar -->
            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script>
        $('.social-link').on('click', function (){
            navigator.clipboard.writeText($(this).attr('link'));
            Swal.fire(
                'Link Kopyalandı.!',
                'Linki ilgili siteye giderek yapıştırın.!',
                'success'
            )
        });
    </script>
    <script>
        $(document).ready(function (){
            const h4Elements = document.getElementsByTagName('h4');

            for (let i = 0; i < h4Elements.length; i++) {
                h4Elements[i].setAttribute('id', `head-${i}`);
            }
        });
    </script>
@endsection