@extends('Frontent.master')
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
    @foreach ( $banner as  $item)
    <div class="slider-item ">
        <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third js-fullheight order-md-last img" style="background-image: url({{ asset('uploads/banner') }}/{{ $item->photo ?? '' }});">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">

                  <h1 class="mb-4 mt-3">I'm <span>{{ $item->title ?? '' }}</span></h1>
                  <h2 class="mb-4">{{ $item->description ?? '' }}</h2>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
    @endforeach

  </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
  <div class="container">
  @foreach ( $aboutme as  $item)
      <div class="row d-flex">
          <div class="col-md-6 col-lg-5 d-flex">
              <div class="img-about img d-flex align-items-stretch">
                  <div class="overlay"></div>
                  <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('uploads/aboutme') }}/{{ $item->photo ?? '' }});">
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
              <div class="row justify-content-start pb-3">
            <div class="col-md-12 heading-section ftco-animate">
                <h1 class="big">About</h1>
              <h2 class="mb-4">{{ $item->about_title ?? '' }}</h2>
              <p>{{ $item->about_description ?? '' }}</p>
              <ul class="about-info mt-4 px-md-0 px-2">
                  <li class="d-flex"><span>Name:</span> <span>{{ $item->name ?? '' }}</span></li>
                  <li class="d-flex"><span>Date of birth:</span> <span>{{ $item->date_of_brith ?? '' }}</span></li>
                  <li class="d-flex"><span>Address:</span> <span>{{ $item->address ?? '' }}</span></li>
                  <li class="d-flex"><span>Zip code:</span> <span>{{ $item->zip ?? '' }}</span></li>
                  <li class="d-flex"><span>Email:</span> <span>{{ $item->email ?? '' }}</span></li>
                  <li class="d-flex"><span>Phone: </span> <span>{{ $item->phone ?? '' }}</span></li>
              </ul>
            </div>
          </div>
        <div class="counter-wrap ftco-animate d-flex mt-md-3">
        <div class="text">
            <p class="mb-4">
              <span class="number" data-number="{{ $item->project_text ?? '' }}">0</span>
              <span>Project complete</span>
          </p>
        </div>
        </div>
      </div>
       @endforeach
  </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb" id="resume-section">
  <div class="container">
      <div class="row justify-content-center pb-5">
        
    <div class="col-md-10 heading-section text-center ftco-animate">
        <h1 class="big big-2">Resume</h1>
      <h2 class="mb-4">Resume</h2>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    </div>
  </div>
      <div class="row">
     @foreach($Resum as  $item)
          <div class="col-md-6">
              <div class="resume-wrap ftco-animate">
                  <span class="date">{{$item->date_of_brith ?? ''  }}</span>
                  <h2>{{$item->resum_title ?? ''  }}</h2>
                  <p class="mt-4">{{$item->resum_description ?? ''  }}</p>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>

<section class="ftco-section" id="services-section">
  @php
      use App\Models\Service;
      $servicess = Service::first();
  @endphp

  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center py-5 mt-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h1 class="big big-2">Services</h1>
        <h2 class="mb-4">{{ $servicess->title ?? 'Our Services' }}</h2>
        <p>{{ $servicess->subtitle ?? 'We offer a wide range of digital solutions.' }}</p>
      </div>
    </div>

    <!-- Service Items -->
    <div class="row">
      @foreach($services as $item)
        <div class="col-md-4 text-center d-flex ftco-animate">
          <div class="services-1">
            <span class="icon mb-4">
              <img src="{{ asset('uploads/services/' . ($item->photo ?? 'default.png')) }}" class="img-fluid" alt="{{ $item->maintitle ?? 'Service Image' }}">
            </span>
            <div class="desc">
              <p>{{ $item->maindescription ?? 'Service description not available.' }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
  @php
      use App\Models\Skill;
      $Skils = Skill::first();
  @endphp
<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">{{ $Skils->skills_title ?? '' }}</h2>
                <p>{{ $Skils->skills_description ?? '' }}</p>
            </div>
        </div>

        <div class="row">
            @foreach($skill as $item)
                <div class="col-md-6 animate-box mb-4">
                    <div class="progress-wrap ftco-animate">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h3 class="skill-title mb-0">{{ $item->skills_name ?? 'Unnamed Skill' }}</h3>
                            <span class="skill-percent text-white font-weight-bold">{{ $item->skills_count ?? 0 }}%</span>
                        </div>
                        <div class="progress">
                            <div 
                                class="progress-bar color-6" 
                                role="progressbar" 
                                aria-valuenow="{{ $item->skills_count ?? 0 }}" 
                                aria-valuemin="0" 
                                aria-valuemax="100"
                                data-width="{{ $item->skills_count ?? 0 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="ftco-section ftco-project" id="projects-section">
  <div class="container">
      <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
        <h1 class="big big-2">Projects</h1>
      <h2 class="mb-4">Our Projects</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    </div>
  </div>
      <div class="row">
          @foreach($recentworks as $item) 
          <div class="col-md-6">
              <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{ asset('uploads/recentworks') }}/{{ $item->photo ?? '' }});">
                  <div class="overlay"></div>
                  <div class="text text-center p-4">
                      <h3><a href="{{ route('portfolio') }}">{{ $item->projecttitle ?? '' }}</a></h3>
                      <a href="{{ route('portfolio') }}"><span>{{ $item->projectdescription ?? '' }}</span></a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>


<section class="ftco-section" id="blog-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-5">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <h1 class="big big-2">Blog</h1>
      <h2 class="mb-4">Our Blog</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    </div>
  </div>
  <div class="row d-flex">
     @foreach($Omsblog as $item) 
    <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
       <a href="{{ route('blogdetails') }}" class="block-20" style="background-image: url('{{ asset('uploads/blog/' . ($item->main_photo ?? '')) }}');">
       </a>

        <div class="text mt-3 float-right d-block">
            <div class="d-flex align-items-center mb-3 meta">
              <p class="mb-0">
                <span class="mr-2">{{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}</span>
                  <a href="{{ route('blogdetails') }}" class="mr-2">{{ $item->admin ?? '' }}</a>
              </p>
          </div>
          <h3 class="heading"><a href="{{ route('blogdetails') }}">{{ $item->title ?? '' }}</a></h3>
        <a href="{{ route('blogdetails') }}"style="color:white;">{{ \Illuminate\Support\Str::words($item->description ?? '',15, '...') }}</a>

        </div>
      </div>
    </div>
      @endforeach
  </div>
</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
     @foreach($success as $item)
  <div class="container">
          <div class="row d-md-flex align-items-center">
    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18">
        <div class="text">
          <strong class="number" data-number="100">{{ $item->count1 ?? '' }}</strong>
          <span>{{ $item->counttitle1 ?? '' }}</span>
        </div>
      </div>
    </div>
    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18">
        <div class="text">
          <strong class="number" data-number="1200">{{ $item->count2 ?? '' }}</strong>
          <span>{{ $item->counttitle2 ?? '' }}</span>
        </div>
      </div>
    </div>
    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18">
        <div class="text">
          <strong class="number" data-number="1200">{{ $item->count3 ?? '' }}</strong>
          <span>{{ $item->counttitle3 ?? '' }}</span>
        </div>
      </div>
    </div>
    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18">
        <div class="text">
          <strong class="number" data-number="500">{{ $item->count4 ?? '' }}</strong>
          <span>{{ $item->counttitle4 ?? '' }}</span>
        </div>
      </div>
    </div>
  </div>
</div>
  @endforeach
</section>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-7 ftco-animate text-center">
                  <h2>I'm <span>Available</span> for freelancing</h2>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
              </div>
          </div>
      </div>
  </section>
  @php
      use App\Models\Contact;
      $Contact = Contact::first();
  @endphp
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <h1 class="big big-2">Contact</h1>
      <h2 class="mb-4">Contact Me</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    </div>
  </div>

  <div class="row d-flex contact-info mb-5">
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-4">Address</h3>
          <p>{{  $Contact->address ?? '' }}</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-4">Contact Number</h3>
          <p><a href="#">{{  $Contact->number_1 ?? '' }}</a></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-4">Email Address</h3>
          <p><a href="mailto:info@yoursite.com">{{  $Contact->email_1 ?? '' }}</a></p>
        </div>
    </div>
    
  </div>

  <div class="row no-gutters block-9">
    <div class="col-md-6 order-md-last d-flex">
      <form action="#" class="bg-light p-4 p-md-5 contact-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
        </div>
      </form>

    </div>

    <div class="col-md-6 d-flex">
        <div class="img" style="background-image: url({{ asset('uploads/contact') }}/{{ $Contact->photo ?? '' }});"></div>
    </div>
  </div>
</div>
</section>


@endsection
