                <div class="collapse navbar-collapse" >
                <ul style="float:left">
                    
                </ul>
                    <ul class="nav navbar-nav" style="float:right">
                        <li {!! classActivePath('/') !!}>
                            {!! link_to('/', 'Welcome to workwithTAG') !!}
                        </li>


                        @if(Request::is('auth/register'))
                            <li class="active">
                                {!! link_to('auth/register', 'Sign-up') !!}
                            </li>

                        @else
                            @if(session('statut') == 'visitor')

                                <li {!! classActivePath('auth/login') !!}>
                                    {!! link_to('auth/login', 'JOIN-US') !!}
                                </li>
                            @else
                                @if(session('statut') == 'admin')
                                    <li>
                                        {!! link_to_route('admin', trans('front/site.administration')) !!}
                                    </li>
                                @elseif(session('statut') == 'redac') 
                                    <li>
                                        {!! link_to('blog', trans('front/site.redaction')) !!}
                                    </li>
                                @endif
                                <li>
                                    {!! link_to('auth/logout', trans('front/site.logout')) !!}
                                </li>
                            @endif
                        @endif

                    </ul>
                </div>
            </div>



    





<div class="imageAndText">
    <div class="jR3DCarouselGallery">
    </div>
    <div class="col" >

    <div class="col-sm-4 col-md-4 col-lg-4" >
            <a href="/"> <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png" id="logoworkwithtag"/>
</a>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4"  id="So1">
                        <center>
                            <a id="tir566" href="https://www.facebook.com/TheAccidentGuys/" onclick="window.open(this.href); return false;"> 
                                <img id="imgyt1" href="https://www.facebook.com/TheAccidentGuys/" style="margin-top:-20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/fbpng.png" width="50" height="50">
                            </a>


                            <a id="tir566" href="https://www.googleplus.com/" onclick="window.open(this.href); return false;"> 
                                <img id="imgyt1" href="https://www.googleplus.com/" style="margin-top:-20px;" src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/googleplus.png" width="50" height="50">
                            </a>


                            <a id="tir566" href="https://twitter.com/TheAccidentGuys" onclick="window.open(this.href); return false;"> 
                                <img id="imgyt1" href="https://twitter.com/Sickness_Claims" style="margin-top:-20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/twit2png.png" width="50" height="50">
                            </a>
                            <a id="tir566" href="http://www.youtube.com/c/TheAccidentGuys" onclick="window.open(this.href); return false;"> 
                                <img id="imgyt1" href="http://www.youtube.com/c/TheAccidentGuys" style="margin-top:-20px;     margin-right: 20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/yout32.png" width="50" height="50">
                            </a>

                        </center>

    </div>
    <div class="col-sm-4 col-md-4 col-lg-4" >
                       <img id="phonez" src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" >


    </div>


    </div>
</div>
       
</div> 


<div id="headerpages" class="">
    <div  style="height: 100%;text-align: center;">


        <a href="/workwithTAG">
            <button type="button" class="btn btn-default btnspecial"  id="Home_Blue2" >
              <i id="ifontawsome" class="fa fa-home sp1" aria-hidden="true" ></i> About TAG
            </button>
        </a>
                <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/Blue-strip.png" class="newt" id="testthis">

        <a href="/TheRules">
            <button type="button" class="btn btn-default btnspecial" id="Rules_Blue2">
              <i class="fa fa-users sp1 " id="ifontawsome" aria-hidden="true" ></i> Compliance
            </button>
        </a>
                <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/Blue-strip.png" class="newt" id="testthis">

        <a href="/FAQ">
            <button type="button" class="btn btn-default btnspecial" id="FAQ2">
             <i class="fa fa-mobile sp1" id="ifontawsome" aria-hidden="true" ></i> App FAQ's
            </button>
        </a>
                <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/Blue-strip.png" class="newt" id="testthis">

        <a href="/News">
            <button type="button" class="btn btn-default btnspecial" id="NEWS_Blue2">
              <i class="fa fa-comments sp1"  id="ifontawsome" aria-hidden="true"></i> TAG News
            </button>
        </a>

                <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/Blue-strip.png" class="newt" id="testthis">
        <a href="/contact/create">
            <button type="button" class="btn btn-default btnspecial" id="Contact_Blue2" >
              <i class="fa fa-envelope sp1" id="ifontawsome" aria-hidden="true" ></i> Contact TAG
            </button>
        </a>

    </div>
</div>

