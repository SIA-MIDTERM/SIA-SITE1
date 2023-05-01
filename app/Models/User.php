<?php  

 namespace App\Models; 
  
 use Illuminate\Database\Eloquent\Model; 
  
 Class User extends Model { 
  
 public $timestamps = false; 
  
 protected $primaryKey = 'teacherid';  
  
 protected $table = 'tblteacher'; 
  
 protected $fillable = [ 
     'teacherid', 'lastname', 'firstname', 'middlename', 'bday', 'age' 
 ]; 
   
 }