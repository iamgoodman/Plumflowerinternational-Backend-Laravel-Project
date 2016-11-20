 @extends('layouts.master');
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 @section('content')
 <style>
     .input-group label{
         
         
         text-align:left;
         
     }
     
 </style>
 
 
@if(count($errors)>0)

<section class = 'info-box fail'>
    
    <ul>
        @foreach($errors->all() as $error)
        
        {{$error}}
        
        
        @endforeach
    
    </ul>
    
    
</section>

@endif

@if(Session::has('fail'))

<section class = 'info-box fail'>
    
    {{Session::get('fail')}}
    
</section>


@endif
 
 <h2>Admin Login</h2>
 <form >
     
 <div class ="input-group">
        <label for ="name">Your Name</label>
        <input type ="text" name ="name" id="name" placeholder="Your Name" />
        </div>
        
        
       <div class ="input-group">
        <label for ="password">Your Password</label>
        <input type ="password" name ="password" id="password" placeholder="Your Password" />
        </div>  
        
        
        <button type="submit" onclick = "send(event)" class="btn">Login</button>
        
         <input type="hidden" name="_token" value="{{Session::token()}}"/>
 </form>
 
 
    <h1>Register</h1>
    <form >
        
        <div class ="input-group">
        <label for ="emaill">Your Email</label>
        <input type ="text" name ="emaill" id="emaill" placeholder="your email" />
        </div>
        
          <div class ="input-group">
        <label for ="passwordd">Your Password</label>
        <input type ="password" name ="passwordd" id="passwordd" placeholder="Your Password" />
        </div>
        
        
        
        <div class ="input-group">
        <label for ="emaill">Your Message</label>
      <textarea name ="message" id="message" rows ="5" placeholder="Message"></textarea>
        </div>
        
        <button type="submit" class="btn" onclick = "register(event)">Register</button>
        
        <input type="hidden" name="_token" value="{{Session::token()}}"/>
        
    </form>

 

   
 
 
  <script type ="text/javascript">
    
        function send(event){
            
     
          event.preventDefault();
          
          $.ajax({
              
              
              type:"POST",
              
              url:"{{route('admin.login')}}",
              
              
              data:{name:$("#name").val(),password:$('#password').val(), _token:"{{Session::token()}}"}
              
           
				
				
		});
             
              
  
        };
        
        
        
        
         function register(event){
            
     
          event.preventDefault();
          
          $.ajax({
              
              
              type:"POST",
              
              url:"{{route('admin.register')}}",
              
              
              data:{emaill:$("#emaill").val(),passwordd:$('#passwordd').val(),message:$("#message").val(), _token:"{{Session::token()}}"}
              
           
				
				
		});
             
              
  
        }
        


        
    </script>
    
    
    
    
    
    
 
 @endsection