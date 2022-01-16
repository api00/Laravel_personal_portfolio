@extends('portfolio.layout.app')

@section('content')

<section id="about">
  <!-- User Introduction-->
  <div class="user-details">
    <h1>My Story</h1>
    <picture>
      <source
        type="image/webp"
        srcset="{{ asset('storage/img/jpg/_SJB2040.jpg') }}"
        alt="Professional Me"
        width="30%"
        style="border-radius: 70%"
      />
      <img
        src="{{ asset('storage/img/jpg/_SJB2040.jpg') }}"
        alt="Professional Me"
        width="20%"
        style="border-radius: 50%"
      />
    </picture>
    <p>
      I am a junior in the College of Information and Computer Sciences at the University of Massachusetts Amherst,
      pursuing an undergraduate degree. I am majoring in Computer Science, with intent to double major in
      Mathematics with Statistics and Data Science concentration. I'm involved as a Software Developer for BUILD
      UMass, where I use my software engineering skills for pro-bono app/web development and tech consulting for the
      Amherst community. I also serve as a Designer for the HackUMass Organizing Team, responsible for graphics
      design and production for the annual hackathon. I am interested in exploring the fields of Software
      Engineering, Data Science, and Machine Learning, and I am open to opportunities for the same.
    </p>
  </div>

  <!-- User Specifics -->
  <div class="user">
    <!-- Technology Stack #1: Languages -->
    <div class="tech">
      <h2>Languages</h2>
      <i class="devicon-php-plain colored"></i>
      <i class="devicon-java-plain-wordmark colored"></i>
      <i class="devicon-cplusplus-plain colored"></i>
      <i class="devicon-javascript-plain colored"></i>
      <p>My favorite languages for systems programming, software engineering, and data analysis.</p>
    </div>

    <!-- Technology Stack #2: Front-End -->
    <div class="tech">
      <h2>Front-End</h2>
      <i class="devicon-react-original colored"></i>
      <i class="devicon-bootstrap-plain-wordmark colored"></i>
      <i class="devicon-html5-plain-wordmark colored"></i>
      <i class="devicon-css3-plain-wordmark colored"></i>
      <p>My preferred technologies for front-end web development and component design.</p>
    </div>

    <!-- Technology Stack #3: Back-End -->
    <div class="tech">
      <h2>Back-End</h2>
      <i class="devicon-laravel-plain colored"></i>

      <i class="devicon-express-original-wordmark colored"></i>
      <i class="devicon-mongodb-plain-wordmark colored"></i>
      <i class="devicon-postgresql-plain-wordmark colored"></i>
      <p>My preferred technologies for back-end web programming and database architecture.</p>
    </div>

    <!-- Technology Stack #4: Tools -->
    <div class="tech">
      <h2>Tools</h2>
      <i class="devicon-git-plain-wordmark colored"></i>
      <i class="devicon-visualstudio-plain"></i>
      <i class="devicon-github-plain-wordmark colored"></i>
      <i class="devicon-docker-plain-wordmark colored"></i>
      <p>My favorite tools for version control, code editing, and container orchestration.</p>
    </div>
  </div>
</section>

<!-- Projects Section -->
@if (isset(Auth::user()->id)  && Auth::user()->id == ($all->user_id=1) )

@if (Auth::check())
<a href="admin_bord" class="ancor">Add new projects</a>
@endif
@endif

<section id="projects">
  
  <div class="user-details">
    <h1>Featured Projects</h1>

  </div>

@foreach ($all as $data )


  
 
 
  <div class="user-projects">
    <div class="images-left">
      <picture>
        <source
          type="image/webp"
          srcset="{{ ('images/'. $data->image) }}"
          alt="{{ $data->title }}"
        />
       <a href="{{ $data->link }}"  target="_blank">
        <img alt="{{ $data->title }}" src="{{ ('images/'. $data->image) }}"/>
       </a>
      </picture>
    </div>
    <div class="contents-right" style="text-align: center">
      <h3>{{ $data->title }}</h3>
   
      <p style="text-align: justify">
        {{ $data->description }}
      </p>
      <a class="project-link" target="_blank" href="{{ $data->link }}">
        Check it out!
      </a>
    </div>
  </div>
  @endforeach
</section>


@endsection