<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/app.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container front">
       
            <form id="contact" action="/admin_bord" method="POST" enctype="multipart/form-data">
                @csrf
                
              
              <h3>Create new Project</h3>
              
              <fieldset>
                <input placeholder="Title" name="title" type="text" tabindex="1" required autofocus>
              </fieldset>
              
              <fieldset>
                <textarea placeholder="Description...." name="description" tabindex="5" required></textarea>
              </fieldset>
              <fieldset>
                <input placeholder="Github Link" name="link" type="text" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input 

                
                type="file"
                name="image"
                class="hidden">              </fieldset>
              
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
              </fieldset>
            </form>
          
        
      
    </div>
    @if ($errors->any())
    <div class="w-100 m-auto text-center">
      @foreach ($errors->all() as $error )
      <li class="text-red-500 list-none">
        {{ $error }}
      </li>
        
      @endforeach
      

    </div>
      
    @endif
</body>
</html>