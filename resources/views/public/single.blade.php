@extends('public.layout.app', ['title' => 'Single Page'])

@section('meta')

@endsection

@section('content')
<!-- === Page Title === -->
<section id="page-title" class="page-title page-title-layoutC bg-overlay bg-overlay-2 text-center">
  <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="pagetitle__heading">Blog Single Right Sidebar</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grid Right Sidebar</li>
          </ol>
        </nav>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- === Blog Single === -->
<section id="blogSingleRightSidebar" class="blog blog-single pb-60">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="blog-item blog-single-item">
          <div class="blog__img">
            <a href="#">
              <img src="assets/images/blog/standard/1.jpg" alt="blog image">
            </a>
          </div><!-- /.entry-img -->
          <div class="blog__content">
            <div class="blog__meta">
              <div class="blog__meta-cat">
                <a href="#">Business</a><a href="#">Tips</a>
              </div><!-- /.blog-meta-cat -->
              <span class="blog__meta-date">Oct 15, 2019</span>
            </div><!-- /.blog-meta -->
            <h4 class="blog__title"><a href="#">Four ways to cheer yourself up on Blue Monday!</a></h4>
            <div class="blog__desc">
              <p>Blue Monday, which falls on 18 January in 2016, is allegedly the most depressing day of the year.
                Understandably, tightened purse strings following the festive splurge, time passed since Christmas
                and failed new year resolutions is not a combination for happiness – but why is the third Monday in
                January apparently the worst day of the year?</p>
              <p>The theory was first published in 2005 a press released under the name of Cliff Arnall, who at the
                time was a tutor at the Centre for Lifelong Learning – a Further Education centre associated with
                Cardiff University. Later, however, the Guardian printed a statement from the university distancing
                itself from the psychology professor: "Cardiff University asked us to point out that Cliff Arnall...
                was a former part-time tutor at the university but Right in February.</p>
              <p>The third Monday of January is supposed to be the most depressing day of the year. Whether you
                believe that or not, the long nights, cold weather and trying to keep to new year resolutions are
                all probably getting to you a little by now. To make matters worse many will still be recovering
                from their Christmas spending</p>
              <p>So how can you make today – and the rest of January – a little better for you and your wallet?
                Well, if times are tight, a little extra in your pocket should make the month more bearable. Here
                are four easy ways to do just that.</p>
              <p>You can make some quick cash by switching your bank account to one with a bonus. Some banks are
                giving away £150 for moving your custom, while others offer cashback or high interest. Of course
                it’s worth checking you won’t lose out in other ways such as high overdraft fees. If you’re likely
                to go into the red you might be better off switching to a bank with lower fees or even a small
                interest free overdraft.</p>
              <p>What’s up in the loft? Or under the bed? If you aren’t sure it probably means you don’t need it –
                and that’s a sign you should try to sell it. If there’s the potential for it to be rare or part of a
                collection it’s worth seeking specialist advice. Otherwise head to a boot fair or list it online.
                Just don’t forget to factor in costs such as postage or fees. The are more tips in our step-by-step
                guide to selling online below. Just click through the slides.</p>
            </div><!-- /.blog-desc -->
          </div><!-- /.entry-content -->
        </div><!-- /.blog-item -->
  <div class="blog-share">
          <h5 class="blog__share-title">Share This Article :</h5>
          <!-- <div class="social__icons"> -->
            <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
            <!-- <a href="#"><i class="fa fa-google-plus"></i></a> -->
            <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
          <!-- </div> -->
    <div class="sharethis-inline-share-buttons"></div>
        </div><!-- /.blog-share -->
        <div class="related-posts">
          <h5 class="blog__widget-title">related posts</h5>
          <div class="row">
            <!-- Blog Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/2.jpg" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Modern</a><a href="#">Photography</a>
                    </div><!-- /.blog-meta-cat -->
                    <span class="blog__meta-date">Oct 18, 2017</span>
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">Old cameras can capture images better</a>
                  </h4>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/3.jpg" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Technology</a><a href="#">City</a>
                    </div><!-- /.blog-meta-cat -->
                    <span class="blog__meta-date">Jan 20, 2019</span>
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">New subway line has the most advanced tech</a>
                  </h4>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Blog Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="blog-item">
                <div class="blog__img">
                  <a href="#">
                    <img src="assets/images/blog/grid/4.jpg" alt="blog image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="#">Business</a><a href="#">Tips</a>
                    </div><!-- /.blog-meta-cat -->
                    <span class="blog__meta-date">Jan 20, 2019</span>
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="#">7 Signs You’re Not A Good UX Designer Yet!</a></h4>
                </div><!-- /.entry-content -->
              </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.related-posts -->
        <div class="blog-widget blog-nav">
          <div class="blog__prev">
            <a href="#">
              <div class="blog__nav-img">
                <img src="assets/images/blog/thumbs/4.jpg" alt="blog thumb">
              </div>
              <div class="blog__nav-content">
                <span>Previous Post</span>
                <h6>Four ways to cheer yourself up on the Blue Monday!</h6>
              </div>
            </a>
          </div><!-- /.blog-prev  -->
          <div class="blog__next">
            <a href="#">
              <div class="blog__nav-content">
                <span>Next Post</span>
                <h6>Old cameras can capture images better than nowdays camera!</h6>
              </div>
              <div class="blog__nav-img">
                <img src="assets/images/blog/thumbs/5.jpg" alt="blog thumb">
              </div>
            </a>
          </div><!-- /.blog-next  -->
        </div><!-- /.blog-nav  -->
        <div class="blog-widget blog-author">
          <div class="blog__author-avatar">
            <img src="assets/images/blog/author/1.jpg" alt="avatar">
          </div><!-- /.author-avatar  -->
          <div class="blog__author-content">
            <h6 class="blog__author-name">Mahmoud Baghagho</h6>
            <p class="blog__author-bio">Founded by Begha over many cups of tea at her kitchen table in 2009, our
              brand promise is simple: to
              provide powerful digital marketing solutions to small and medium businesses.</p>
            <div class="social__icons">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-vimeo"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-rss"></i></a>
            </div>
          </div><!-- /.author-content  -->
        </div><!-- /.blog-author  -->
        <div class="blog-widget blog-comments">
          <h5 class="blog__widget-title">comments</h5>
          <ul class="comments-list">
            <li class="comment__item">
              <div class="comment__avatar">
                <img src="assets/images/blog/author/2.jpg" alt="avatar">
              </div>
              <div class="comment__content">
                <h6 class="comment__author">Mohamed Habaza</h6>
                <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                  can be a perfect example
                  of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                  numbers if that was the site of a mattress selling company.</p>
                <a class="comment__reply" href="#">reply</a>
              </div>
              <ul class="nested__comment">
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="assets/images/blog/author/3.jpg" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h6 class="comment__author">Mahmoud Baghagho</h6>
                    <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                      WBF can be a perfect
                      example of new keywords and content, and broadening the funnel as well. I can only imagine the
                      sale numbers if that was the site of a mattress selling company.</p>
                    <a class="comment__reply" href="#">reply</a>
                  </div>
                </li><!-- /.comment -->
              </ul><!-- /.nested-comment -->
            </li><!-- /.comment -->
          </ul><!-- /.comments-list -->
        </div><!-- /.blog-comments -->
        <div class="blog-widget blog-comments-form">
          <h5 class="blog__widget-title">Leave A Reply</h5>
          <form>
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name:">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Last Name:">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email:">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website:">
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Comment"></textarea>
                </div><!-- /.form-group -->
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn__primary">Submit</button>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </form>
        </div><!-- /.blog-comments-form -->
      </div><!-- /.col-lg-9 -->

  <div class="col-sm-12 col-md-12 col-lg-4">
        <aside class="sidebar sidebar-wide">
    <div class="widget widget-posts">
            <h5 class="widget__title">Recent Posts</h5>
            <div class="widget__content">
              <!-- post item #1 -->
              <div class="widget-post-item">
                <div class="widget__post-img">
                  <a href="#"><img src="assets/images/blog/thumbs/1.jpg" alt="product"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget__post-content">
                  <span class="widget__post-date">Oct 15, 2017</span>
                  <h6 class="widget__post-title"><a href="#">Four ways to cheer yourself up</a></h6>
                </div><!-- /.widget-post-content -->
              </div><!-- /.widget-post-item -->
              <!-- post item #2 -->
              <div class="widget-post-item">
                <div class="widget__post-img">
                  <a href="#"><img src="assets/images/blog/thumbs/2.jpg" alt="product"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget__post-content">
                  <span class="widget__post-date">Oct 15, 2017</span>
                  <h6 class="widget__post-title"><a href="#">Old cameras can capture images</a></h6>
                </div><!-- /.widget-post-content -->
              </div><!-- /.widget-post-item -->
              <!-- post item #3 -->
              <div class="widget-post-item">
                <div class="widget__post-img">
                  <a href="#"><img src="assets/images/blog/thumbs/3.jpg" alt="product"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget__post-content">
                  <span class="widget__post-date">Oct 15, 2017</span>
                  <h6 class="widget__post-title"><a href="#">New subway line has the most advanced</a></h6>
                </div><!-- /.widget-post-content -->
              </div><!-- /.widget-post-item -->
            </div><!-- /.widget-content -->
          </div><!-- /.widget-posts -->
          <div class="widget widget-categories">
            <h5 class="widget__title">categories</h5>
            <div class="widget-content">
              <ul class="list-unstyled">
                <li><a href="#">Social Analytics</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Engagement</a></li>
                <li><a href="#">Listening</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Web & Mob Applications</a></li>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-categories -->
          <div class="widget widget-tags">
            <h5 class="widget__title">Tags</h5>
            <div class="widget-content">
              <ul class="list-unstyled">
                <li><a href="#">Responsive</a></li>
                <li><a href="#">Fresh</a></li>
                <li><a href="#">Modern</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Business</a></li>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-Tags -->
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->

</div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
