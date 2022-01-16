<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <title>Document</title>
    <style>
.ancor{
  display: inline-block;
}
.user-projects {
  margin-top: 320px ;
}
    </style>
</head>

<body>
    <a href="admin_bord/create" class="ancor">Create Project</a>
   
    @foreach ($all as $data )
    <div class="user-projects">
        
            
       
        <div class="images-left">
          <picture>
         
            <img alt="{{ $data->title }}" class="pct" src="{{ ('images/'. $data->image) }}" />
          </picture>
        </div>
        <div class="contents-right" style="text-align: center">
          <h3>{{ $data->title }}</h3>
          <div>
            <img
              height="32"
              width="32"
              src="https://unpkg.com/simple-icons@3.4.0/icons/cplusplus.svg"
              style="filter: invert(22%) sepia(77%) saturate(1486%) hue-rotate(183deg) brightness(101%) contrast(103%)"
            />
          </div>
          <p style="text-align: justify">
            {{ $data->description }}
          </p>
          <a class="project-link" target="_blank" href="https://github.com/AVS1508/Valuto-Account-Management-System">
            Check it out!
          </a>
        </div>
        @if (isset(Auth::user()->id)  && Auth::user()->id == $data->user_id )
          
        
        <a href=" admin_bord/{{$data->id }}/edit" class="ancor" >Edit</a>
     
      <form  class="ancor"
                action="admin_bord/{{$data->id }}"
                method="POST">
                @csrf
                @method('delete')

                <button
                    class="text-red-500 pr-3"
                    type="submit">
                    Delete
                </button>

            </form>
            @endif
      </div>
      @endforeach
  
</body>
</html>