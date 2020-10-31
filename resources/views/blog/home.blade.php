@extends('blog.default')

@section('content')

<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            @include('blog.menu')
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->

    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <div class="first-slot">
                    <div class="masonry-box post-media">
                        <img src="{{asset('assets/upload/tech_01.jpg')}}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                    <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end first-side -->

                <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img src="{{asset('assets/upload/tech_02.jpg')}}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                    <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                    <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->

                <div class="last-slot">
                    <div class="masonry-box post-media">
                        <img src="{{asset('assets/upload/tech_03.jpg') }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                    <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                    <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-top clearfix">
                            <h4 class="pull-left">Posts Recentes <a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->

                        @if(!empty($posts[0]))
                            @foreach($posts as $post)
                                <div class="blog-list clearfix">
                                    <div class="blog-box row mb-3">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="{{ asset('assets/upload/tech_blog_01.jpg') }}" alt="" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div><!-- end media -->
                                        </div><!-- end col -->

                                        <div class="blog-meta big-meta col-md-8">
                                            <h4><a href="{{ route('single-post', ['id'=>$post->id ,'slug'=>$post->slug]) }}" title="">{{ $post->titulo }}<br></a></h4>
                                            <p>{{ substr($post->conteudo,0, 191)."..." }}</p>
                                            <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                            <small><a href="tech-single.html" title="">{{ $post->created_at->format('d/m/Y H:i') }}</a></small>
                                            <small><a href="tech-author.html" title="">{{ $post->autor }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->


                                </div><!-- end blog-list -->
                            @endforeach
                        @else
                            <div class="blog-list clearfix">
                                <h5>Ainda não há nenhum post</h5>
                            </div><!-- end blog-list -->

                        @endif


                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
{{--                            <nav aria-label="Page navigation">--}}
{{--                                <ul class="pagination justify-content-start">--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#">Next</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
                            {{ $posts->links() }}
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">

                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    @include('blog.footer')

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->


@endsection
