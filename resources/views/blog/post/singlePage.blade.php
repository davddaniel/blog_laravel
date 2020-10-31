@extends('blog.default')

@section('content')

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                @include('blog.menu')
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/">Blog</a></li>
                                    <li class="breadcrumb-item active">{{ $post->titulo }}</li>
                                </ol>

                                <span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>

                                <h3>{{ $post->titulo }}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title="">{{ $post->created_at->format('d/m/Y H:i') }}</a></small>
                                    <small><a href="tech-author.html" title="">{{ $post->autor }}</a></small>
                                </div><!-- end meta -->

                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="upload/tech_menu_08.jpg" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">
                                <div class="pp">
                                    <p>{{ $post->conteudo }}</p>
                                </div><!-- end pp -->

                            </div><!-- end content -->

                            <div class="blog-title-area">


                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="{{ route('edit-post', ['id'=>$post->id]) }}" class="btn btn-primary">Editar Postagem</a></li>
                                        <li><a href="{{ route('excluir-post', ['id'=>$post->id]) }}" class="btn btn-primary">Excluir Postagem</a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <hr class="invis1">

                            {{--Comentários--}}


                            <hr class="invis1">

                            {{--Formulário de envio de comentário--}}

                        </div><!-- end page-wrapper -->
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
