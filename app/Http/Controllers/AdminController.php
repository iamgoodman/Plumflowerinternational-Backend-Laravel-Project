<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Author;
use App\Admin;


class AdminController extends Controller

{
    
    
public function getIndex()
{
    
    
    return view('index');
    
}

public function getPublic()
{
    
    
    return ['success' => true, 'info' =>'Some information about the <b>company</b>'];
    
    
}
  
    
   public function getLogout()
    
    {
        Auth::logout();
        
        
        return  ['success'=>true];
        
    }
    
    
    public function getLogin()
    
    {
        return view('admin.login');
        
    }
    
  public function postRegister(Request $request)
  

  {
      
         $this->validate($request,[
            
            'emaill' => 'required',
            'passwordd' => 'required',
            'message'=>'required'
            
            ]);
      
      
      $user = new Admin();
      
      $user->name = $request['emaill'];
      
      $user->password = bcrypt($request['passwordd']);
      
      $user->info = $request['message'];
      
      $user->save();
      
  return ['success' => true];
      
  }
    
    public function postLogin(Request $request)
    {
        
        $this->validate($request,[
            
            'name' => 'required',
            'password' => 'required'
            
            
            ]);
            
            
            if(!Auth::attempt(['name'=>$request['name'],'password' => $request['password']   ])){
               
               
               return ['fail'=>'cant log in'];
               
           }
        
        
    else{
        

       return  ['success' => true, 'token' => 'fb566635a66295da0c8ad3f467c32dcf'];
               
 
        
    }
        
        
        
        
        
        
    }
    
    
    
    
    
      public function getProfile($token=null)
    {
       
        
     if ($token == "fb566635a66295da0c8ad3f467c32dcf"){
         
         
 
     
        $admin = Admin::where('id',2)->get();
        
        
        
        $name =$admin[0]->name;
        
        $info = $admin[0]->info;
    
        
        return ['name' => $name,'info' =>$info];
        
        
    }  

else

{
    
         return [ 'success' =>false, 'access' =>'denied'];
    
    
}

}


  public function getAuthor($token=null)
    {
        
        
        sleep(5);
        
        if ($token == "fb566635a66295da0c8ad3f467c32dcf"){
         
     
        $authors = Author::first();
        
        $name = $authors->name;
        
        $id = $authors->id;
        
   
     
    
        return ['success'=>true, 'author' => $name, 'id' =>$id];
        
        
    }  
       
      else{
          
            return [ 'success' =>false, 'access' =>'denied'];
          
      }
        
        
    }


   
   
   
  public function getQuote($token=null,$authorid = null)
    {
        
        
      sleep(5);
      
        
        if ($token == "fb566635a66295da0c8ad3f467c32dcf" && $authorid =="1"){
         
     
        $authors = Author::find($authorid);
        
        $name = $authors->name;
        
        $id =$authors->id;
        
           
      $qu = $authors->quotes[1];
       
      $qname = $qu->quote;

      $author_id = $qu->author_id;
       
   


    
      return ['success'=>true, 'author' => $name, 'authorid'=>$id,'quote'=>$qname,
      'author_id'=>$author_id];
        
        
    }  
       
      else{
          
                  return [ 'success' =>false, 'access' =>'denied'];
          
      }
        
        
    }

   
    
    
    
    
}