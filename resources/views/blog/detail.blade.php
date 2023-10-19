@extends('layouts.master')
@section('title', $blog->meta_keys)
@section('meta_description', $blog->meta_description)
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog-Inhalte</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Blog-Details</h2>
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
                                        <li><i class="far fa-comments"></i>{{$comments->count()}} Kommentar</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                {!! $blog->description !!}
                            </div>
                        </div>

                        <div class="card blog-share clearfix" style="border-radius: 18px">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Aktie</h4>
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
                                <h4 class="card-title">Kommentare ({{$blog->comments->count()}})</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="comments-list">
                                    @forelse($comments as $comment)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="{{storage($comment->customer->image)}}">
                                                </div>
                                                <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">{{$comment->customer->name}}</span>
													</span>
                                                    <p>{{$comment->comment}}</p>
                                                    <p class="blog-date">{{$blog->created_at->translatedFormat('d F Y')}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <div class="alert alert-info">Sei der erste der kommentiert!</div>
                                    @endforelse

                                </ul>
                                    @if($comments->count() > 2)
                                        <div class="text-center w-100 d-flex justify-content-center">
                                            {!! $comments->links() !!}
                                        </div>
                                    @endif

                                @if(auth('customer')->check())
                                    <form class="my-2" method="post" action="{{route('blog.comment.store')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Yorum Yap</label>
                                            <textarea class="form-control" name="comment" placeholder="Meine Kommantare" rows="5"></textarea>
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" style="width: 300px">
                                                Schicken
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-warning my-2">Kommentieren <a href="{{route('customer.login')}}"><b>Anmelden</b></a> Es ist notwendig!</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right">
                    <!-- Categories -->
                    <div class="card category-widget" style="border-radius: 18px;">
                        <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                            <h4 class="card-title">Themen</h4>
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
                            <h4 class="card-title">Neueste Beiträge</h4>
                        </div>
                        <div class="card-body">
                            <ul class="latest-posts">
                                @forelse($blogs as $row)
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{route('blog.detail', $row->slug)}}">
                                                <img class="img-fluid" src="{{image($row->image)}}" alt="">
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
                'Link kopiert!',
                'Gehen Sie zur entsprechenden Website und fügen Sie den Link ein.',
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