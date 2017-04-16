@extends('layouts.app')
@section('content')

    <header>
        <div class="container">
            <div class="row">
                <div class="centertext text-center">
                    <br><br>
                    <h1>Keep or Share Your Ideas!</h1>
                </div>
                <br>
            </div>
            <div class="row text-center">
                        <div class="logo text-center">
                            <img src="/img/idea.png" style="width: 135px; height:150px;" alt="logo">
                            <h1>ideacloud</h1>
                            <br>
                            <a href="{{ route('login') }}" class="btn btn-outline btn-xl">Sign In!</a>
                        </div>

            </div>
        </div>
    </header>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <hr class="colored">
                    <h4 class="section-subheading text-muted">"A man of genius makes no mistakes. His erros are volitional and are portals of discovery."</h4>
                    <h4 class="section-subheading text-muted"></h4>
                </div>
            </div>
            <br><br><br>
            <div class="row text-center">
                <div class="col-md-5 col-md-offset-1">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ideas</h4>
                    <p class="text-muted">Keep or Share your Creative ideas. Also, you can save your ideas with categories. If you are having hard time to think creative ideas look at other people's ideas and try to copycat!</p>
                </div>
                <div class="col-md-5">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Daily tasks</h4>
                    <p class="text-muted">This section is just like Todo apps. You can update your daily tasks. Manage all your personnel or business tasks so that you can make your life much better.</p>
                </div>

            </div>
        </div>
    </section>

@endsection