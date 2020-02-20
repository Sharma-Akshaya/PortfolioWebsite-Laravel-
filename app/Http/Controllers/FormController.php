<?php

namespace App\Http\Controllers;
use DB;
use App\Form;
use App\about;
use App\checkin;
use App\hireme;
use App\transferable;
use App\marketableskills;
use App\reference;
use App\resume;
use App\languages;
use App\blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class FormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**public function about(Request $request){
        $about= Use DB::table()
    }*/

public function skills(){
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $dbname ='laravel';
    $mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);

//languages`(`Know`, `Percentage`, `IDGenerated`

if(isset($_POST['InsertL'])){
    if(isset($_POST['Know']) and isset($_POST['PercentageL'])){
            $Know = $_POST['Know'];
            $Percentage = $_POST['PercentageL'];

            $query = "INSERT INTO languages (Know,Percentage,IDGenerated) VALUES ('$Know','$Percentage','1')";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>window.alert('Information Inserted!!');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>window.alert('Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
        } else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
}
        if(isset($_POST['DeleteL'])){
            $Know = $_POST['Know'];
            $Percentage = $_POST['Percentage'];
            $query = "DELETE FROM languages WHERE Know='$Know'";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
        //marketableskills`(`Skill`, `Percentage`, `IDGenerated`
        if(isset($_POST['InsertM'])){
            if(isset($_POST['SkillM']) and isset($_POST['PercentageM'])){
            $Skill = $_POST['SkillM'];
            $Percentage = $_POST['PercentageM'];
            $query = "INSERT INTO marketableskills (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','1')";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
            }else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
        }
        if(isset($_POST['DeleteM'])){
            $Skill = $_POST['SkillM'];
            $Percentage = $_POST['PercentageM'];
            $query = "DELETE FROM marketableskills WHERE Skill='$Skill'";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
    //`transferable`(`Skill`, `IDGenerated`, `Percentage`   
        if(isset($_POST['InsertT'])){
            if(isset($_POST['Skill']) and isset($_POST['Percentage'])){
            $Skill = $_POST['Skill'];
            $Percentage = $_POST['Percentage'];
            $query = "INSERT INTO transferable (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','1')";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
            }else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
        }
        if(isset($_POST['DeleteT'])){
            $Skill = $_POST['Skill'];
            $Percentage = $_POST['Percentage'];
            $query = "DELETE FROM transferable WHERE Skill='$Skill'";
            if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
}





    /*public function skills()
    {
        $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $dbname ='laravel';
    $mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);

        if(isset($_POST['InsertL'])){
            if(isset($_POST['Know']) and isset($_POST['Percentage']))
            {
                 $Know = $_POST['Know'];
            $Percentage = $_POST['Percentage'];
            $query = "INSERT INTO languages (Know,Percentage,IDGenerated) VALUES ('$Know','$Percentage','2')";
                 //\DB::table('languages')->insert(
    //['Know' => $Know,'Percentage' => $Percentage,'IDGenerated'=>1]);

                //\DB::table('languages')->insert(['Know' => $Know,'Percentage' => $Percentage,'IDGenerated'=>1]);
        //
                if(mysqli_query($mydb, $query)){
                    echo "<script type='text/javascript'>window.alert('Information Inserted!!');window.location.href='/Adminskills';</script>";
                    }
                else{
                    echo "<script type='text/javascript'>window.alert('Information Not Inserted!!');window.location.href='/Adminskills';</script>";
                    }
             } 
            else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
                }
        }
        if(isset($_POST['DeleteL'])){
            $Know = $_POST['Know'];
            $Percentage = $_POST['Percentage'];
            $query ="DELETE FROM languages WHERE Know='$Know'";
            //\DB::table('languages')->where('Know', '=', $Know)->delete();
             //"DELETE FROM languages WHERE Know='$Know'";
            if(mysqli_query($mydb, $query))
            {
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
        //marketableskills`(`Skill`, `Percentage`, `IDGenerated`
        if(isset($_POST['InsertM'])){
            if(isset($_POST['Skill']) and isset($_POST['Percentage'])){
                $Skill = $_POST['Skill'];
                $Percentage = $_POST['Percentage'];
                //$query = \DB::table('marketableskills')->insert(['Skill' => $Skill,'Percentage' => $Percentage,'IDGenerated'=>1]);
           // "INSERT INTO marketableskills (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','2')";
                $query = "INSERT INTO marketableskills (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','2')";
            if(mysqli_query($mydb, $query)){
                    echo "<script type='text/javascript'>alert('Information Inserted!!');window.location.href='/Adminskills';</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Information Not Inserted!!');window.location.href='/Adminskills';</script>";
                    }
            }
            else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
                }
        }
        if(isset($_POST['DeleteM'])){
            $Skill = $_POST['Skill'];
            $Percentage = $_POST['Percentage'];
            $query = "DELETE FROM marketableskills WHERE Skill='$Skill'";
            //$query =\DB::table('marketableskills')->where('Skill', '=', $Skill)->delete();
             //"DELETE FROM marketableskills WHERE Skill='$Skill'";
            if($query){
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
    //`transferable`(`Skill`, `IDGenerated`, `Percentage`   
        if(isset($_POST['InsertT'])){
            if(isset($_POST['Skill']) and isset($_POST['Percentage'])){
            $Skill = $_POST['Skill'];
            $Percentage = $_POST['Percentage'];
            $query = \DB::table('transferable')->insert(
    ['Skill' => $Skill,'Percentage' => $Percentage,'IDGenerated'=>1]);

            //"INSERT INTO transferable (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','2')";
            if($query){
               echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
            }else{
                echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='/Adminskills';</script>";
            }
        }
        if(isset($_POST['DeleteT'])){
            $Skill = $_POST['Skill'];
            $Percentage = $_POST['Percentage'];
            $query = \DB::table('transferable')->where('Skill', '=', $Skill)->delete();
            //"DELETE FROM transferable WHERE Skill='$Skill'";
            if($query){
               echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='/Adminskills';</script>";
           }
           else{
                echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='/Adminskills';</script>";
            }
        }
    }*/


    public function adminref(){
        $Name = $_POST['Name'];
    //$Img = addslashes(file_get_contents($_FILES['Img']['tmp_name']));
     
    $JobTitle = $_POST['JobTitle'];
    $Recommendation = $_POST['Recommendation'];
    if(isset($_POST['Insert'])){
        if(isset($_POST['Name']) and isset($_POST['JobTitle'])and isset($_POST['Recommendation'])){
                $Name = $_POST['Name'];
                $Recommendation = $_POST['Recommendation'];
                $sql = \DB::table('reference')->insert(
    ['Name' => $Name,'JobTitle' => $JobTitle,'Recommendation' => $Recommendation,'IDGeneration'=>1]);

                //"INSERT INTO reference (Name,Img,JobTitle,Recommendation,IDGeneration) VALUES('$Name','$Img','$JobTitle','$Recommendation','2')";
        if ($sql) {
        echo "<script type='text/javascript'>window.alert('Data Inserted');window.location.href = '/Adminreference';</script>";
    } else {
        echo"<script type='text/javascript'>window.alert('Error in database');window.location.href = '/Adminreference';</script>";
    }
    }else{
        echo"<script type='text/javascript'>window.alert('Some fields are empty please fill all');window.location.href = '/Adminreference';</script>";
    }
    }/*elseif(isset($_POST['Delete'])){
        
        $sql2="DELETE FROM reference WHERE Name = $Name";
        if ($mydb->query($sql2) === TRUE) {
            echo"<script type='text/javascript'>alert('Data Deleted from database')window.location.href = 'Adminreference.html';</script>";
            }else{
                echo"<script type='text/javascript'>alert('Data not in Table')window.location.href = 'Adminreference.html';</script>";
            }
                    
    }*/
    
    if(isset($_POST['Delete'])){
            $query = \DB::table('reference')->where('Name', '=', $Name)->delete();

            //"DELETE FROM reference WHERE Name='$Name'";
            if($query){
               echo "<script type='text/javascript'>window.alert('Data Deleted from database...');
                window.location.href='/Adminreference';</script>";
           }
           else{
                echo "<script type='text/javascript'>window.alert('Data not in Table....');
                window.location.href='/Adminreference';</script>";
            }
        }
    }


    public function logindetails(){
        if (isset($_POST['UserName']) and isset($_POST['Password'])){
    
    // Assigning POST values to the variables.
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
     
    try{
    $sql =\DB::table('checkin')->where('IDGenerated', '=', 1)
        ->update(['UserName'=>$UserName,'Password'=>$Password]);
    // "UPDATE checkin SET UserName='$UserName',Password='$Password' WHERE IDGenerated = 2";

    
        echo "<script type='text/javascript'>window.alert('Login credential updated');window.location.href = '/AdminAbout';</script>";
    } catch (\Illuminate\Database\QueryException $e){
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = '/Adminlogin';</script>";
    }
    }
    else{
        echo"<script type='text/javascript'>alert('Fields are empty please fill all')window.location.href = '/Adminlogin';</script>";
    }
    }

    public function adminadminresume(){
        $Company = $_POST['Company'];
            $Post =$_POST['Post'];
            $Start =$_POST['Start'];
            $End =$_POST['End'];
            $Year =$_POST['Year'];
    if (isset($_POST['Insert']))
    {
        if(isset($_POST['Company']) and isset($_POST['Post']) and isset($_POST['Start']) and isset($_POST['End']) and isset($_POST['Year']))
        {
            $Company = $_POST['Company'];
            $Post =$_POST['Post'];
            $Start =$_POST['Start'];
            $End =$_POST['End'];
            $Year =$_POST['Year'];
            $sql=\DB::table('resume')->insert(
    ['Company' => $Company,'Post' => $Post,'Start' => $Start,'End' => $End,'Year' => $Year,'IDGenerated'=>1]);

            //"INSERT INTO resume (Company,Post,Start,End,IDGenerated,Year) VALUES ('$Company','$Post','Start','$End','2','$Year')";
            
            if ($sql)
            {
                echo"<script type='text/javascript'>window.alert('Data Inserted in database');window.location.href = '/Adminresume';</script>";
            }else
            {
                echo"<script type='text/javascript'>alert('Error while inserting');window.location.href = '/Adminresume';</script>";
            }       
        }else{
            echo"<script type='text/javascript'>alert('Some fields are empty')window.location.href = '/Adminresume';</script>";
        }
        
    }
    
    if(isset($_POST['Delete']))
    {
        $sql2=\DB::table('resume')->where('Company', '=', $Company)->delete();
        //"DELETE FROM `resume` WHERE Company = '$Company'";
        if ($sql2) {
            echo"<script type='text/javascript'>window.alert('Data Deleted from database');window.location.href = '/Adminresume';</script>";}else{
                echo"<script type='text/javascript'>window.alert('Data not in Table')window.location.href = '/Adminresume';</script>";
            }   
    }




    }




    public function adminhiremeinsert(){
        $Cost = $_POST['Cost'];
    $JobTitle = $_POST['JobTitle'];
    $Task = $_POST['Task'];
   if(isset($_POST['Insert'])){
    if(isset($_POST['Cost']) and isset($_POST['JobTitle'])and isset($_POST['Task'])){
        $Cost = $_POST['Cost'];
        $JobTitle = $_POST['JobTitle'];
        $Task = $_POST['Task'];
        $sql =\DB::table('hireme')->insert(
    ['Cost' => $Cost,'JobTitle' =>$JobTitle,'Task' => $Task,'IDGenerated' => 1]);

         //"INSERT INTO hireme (Cost,JobTitle,Task,IDGenerated) VALUES('$Cost','$JobTitle','$Task ','2')";
        if ($sql) {
        echo "<script type='text/javascript'>window.alert('Data Inserted');window.location.href = '/Adminhireme';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = '/Adminhireme';</script>";
    }
    }else{
        echo"<script type='text/javascript'>alert('Some fields are empty please fill all')window.location.href = '/Adminhireme';</script>";
        }
    }else{
         $sql2 = \DB::table('hireme')->where('JobTitle', '=', $JobTitle)->delete();

        //"DELETE FROM hireme WHERE JobTitle = '$JobTitle'";
        
        if ($sql2 == TRUE) {
            echo"<script type='text/javascript'>window.alert('Data Deleted from database');window.location.href = '/Adminhireme';</script>";
            }else{
                echo"<script type='text/javascript'>window.alert('Data not in Table');window.location.href = '/Adminhireme';</script>";
            } 

    }
    
    }

    public function adminhiremedelete(){
        $Cost = $_POST['Cost'];
    $JobTitle = $_POST['JobTitle'];
    $Task = $_POST['Task'];
        $sql2 = \DB::table('hireme')->where('JobTitle', '=', $JobTitle)->delete();

        //"DELETE FROM hireme WHERE JobTitle = '$JobTitle'";
        
        if ($sql2 === TRUE) {
            echo"<script type='text/javascript'>window.alert('Data Deleted from database');window.location.href = '/Adminhireme';</script>";
            }else{
                echo"<script type='text/javascript'>window.alert('Data not in Table');window.location.href = '/Adminhireme';</script>";
            }
    }



    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkexist =  \DB::table('checkin')->where('UserName', '=', $username)->get();
        $wordCount = $checkexist->count();
        if($wordCount>=1)
        {
            foreach($checkexist as $key => $data)
            {
                if($data->IDGenerated == 1)
                {
                    //echo "Login Credentials for admin verified";
                    echo "<script type='text/javascript'>window.alert('Login Credentials for Admin verified ..WELCOM Admin');window.location.href = '/AdminAbout';</script>";
                }else{
            
            
                         //echo "Login Credentials verified";
                        echo "<script type='text/javascript'>window.alert('Login Credentials verified');window.location.href = '/home';</script>";
                    }
            }
        }else{
        echo "<script type='text/javascript'>window.alert('Invalid Login Credentials or user name not found Please sign up')window.location.href = '/entry';</script>";
        //echo "Invalid Login Credentials";
        }



       /* $form = \DB::table('checkin')->where('UserName', '=', $username);
        foreach($form as $key => $data){
        if($username == 'akshaya' and $password=='aaaaa@1A'){
                    //echo "Login Credentials for admin verified";
        echo "<script type='text/javascript'>window.alert('Login Credentials for Admin verified ..WELCOM Admin');window.location.href = '/AdminAbout';</script>";
            }else{
            
            
        //echo "Login Credentials verified";
        echo "<script type='text/javascript'>window.alert('Login Credentials verified');window.location.href = '/home';</script>";}
        }*/
    }


    public function adminportfolio(){
        if(isset($_POST['InsertP'])){
            if(isset($_POST['Image'])){
            //$Image = $_POST['Image'];
            //$file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));  
      //$query = "INSERT INTO tbl_images(name) VALUES ('$file')";
            //$query = "INSERT INTO portfolio (Name,Image,IDGenerated) VALUES ('Apps','$file','2')";
            //if(mysqli_query($mydb, $query)){
               echo "<script type='text/javascript'>window.alert('Information Inserted!!');
                window.location.href='/DownloadCVportfolio';</script>";
          /* }
           else{
                echo "<script type='text/javascript'>window.alert('Error in Adding');
                window.location.href='DownloadCVportfolio.html';</script>";
            }*/
            
            }
            
           else{
                echo "<script type='text/javascript'>window.alert('Image Not Inserted!!');
                window.location.href='/DownloadCVportfolio';</script>";
            }
        }
        
if(isset($_POST['InsertR'])){
            if(isset($_POST['resume'])){
            //$resume= $_POST['resume'];
            /* $file = addslashes(file_get_contents($_FILES["resume"]["tmp_name"]));
            $query = "INSERT INTO DownloadResume (Id,resume) VALUES ('2','$file')";
            if(mysqli_query($mydb, $query)){*/
               echo "<script type='text/javascript'>alert('File Inserted!!');
                window.location.href='/DownloadCVportfolio';</script>";
          /* }
           else{
                echo "<script type='text/javascript'>alert('Error in Adding');
                window.location.href='DownloadCVportfolio.html';</script>";
            }*/
            
            }
            
           else{
                echo "<script type='text/javascript'>alert('File Not Inserted!!');
                window.location.href='/DownloadCVportfolio';</script>";
            }
        }
    }


    public function sendemail(){
        $name = 'akshaya';
        Mail::to('akshaya762@gmail.com')->send(new SendMailable($name));
   
   return 'Email was sent';

        // Please specify your Mail Server - Example: mail.example.com.
/*ini_set("SMTP","akshaya762@gmail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'akshaya762@gmail.com');
        $email2 = $_POST['email'];
$subject = $_POST['phonenumber'];
$message = $_POST['messageif'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
// Send Mail By PHP Mail Function
if(mail("akshaya762@gmail.com", $subject, $message, $headers)){
echo "<script>window.alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";
echo "<script>window.location.href='contactme.php'</script>";
}
else{
    echo "Not sent....";
}*/

   
}

      public function adminabout()
    {
       /* $users = about::where('IDGenerated', 1)->update(array(
'Phone'=>'$Phone','Address'=>'$Address','DtaeOfBirth'=>'$DtaeOfBirth','Nationality'=>'$Nationality','Description'=>'$Description','Skype'=>'$Skype','Website'=>'$Website','Email'=>'$Email'));
        return redirect('/AdminAbout')->with('success','About has been  updated');*/

    if(isset($_POST['name']) and isset($_POST['lastname'])and isset($_POST['Email'])and isset($_POST['DtaeOfBirth'])and isset($_POST['Address'])and isset($_POST['Phone']) and isset($_POST['Nationality']) and isset($_POST['Skype']) and isset($_POST['Website'])and isset($_POST['Description']))
    {
    
    // Assigning POST values to the variables.
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['Email'];
    $DtaeOfBirth  = $_POST['DtaeOfBirth'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $Nationality = $_POST['Nationality'];
    $Skype = $_POST['Skype'];
    $Website = $_POST['Website'];
    $Description = $_POST['Description'];
  try{
        $sql=\DB::table('checkin')->where('IDGenerated', '=', 1)
        ->update(['FirstName'=>$name,'LastName'=>$lastname]);
    
             //= "UPDATE checkin SET FirstName='$name',LastName='$lastname' WHERE   IDGenerated = 2";
        $sql2 =\DB::table('about')->where('IDGenerated', '=', 1)
        ->update(['Address'=>$Address,'DtaeOfBirth'=>$DtaeOfBirth,'Nationality'=>$Nationality,'Description'=>$Description,'Skype'=>$Skype,'Website'=>$Website,'Email'=>$Email]);

    
   
        echo "<script type='text/javascript'>window.alert('Updated succefully');window.location.href='/AdminAbout';</script>";
       
    }catch (\Illuminate\Database\QueryException $e) {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = 'AdminAbout.php';</script>";
    }
}
    else{
        echo"<script type='text/javascript'>alert('Some fields are empty please fill all')window.location.href = '/AdminAbout';</script>";
    }


    }



    public function index()
    {
        //
        $forms = about::all()->toArray();
        return view('forms.index', compact('forms'));

        //return View::make('forms.index')->with('about', about::all())->with('checkin', checkin::all());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
         $request->validate([
          'coinname' => 'required',
          'coinprice'=> 'required|numeric',
        ]); 
        
        $form= new Form();
        $form->coinname=$request->get('coinname');
        $form->coinprice=$request->get('coinprice');
        $checkbox = implode(",", $request->get('option'));
        $form->dropdown=$request->get('dropdown');
        $form->radio=$request->get('radio');
        $form->checkbox = $checkbox; 
        $form->save();
        return redirect('forms')->with('success', 'Coin has been added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $form = Form::find($id);
        return view('forms.edit',compact('form','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // ProductController.php

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    $request->validate([
          'coinname' => 'required',
          'coinprice'=> 'required|numeric',
        ]); 
        $form = Form::find($id);
        $form->coinname=$request->get('coinname');
        $form->coinprice=$request->get('coinprice');
        $checkbox = implode(",", $request->get('option'));
        $form->dropdown=$request->get('dropdown');
        $form->radio=$request->get('radio');
        $form->checkbox = $checkbox; 
        $form->save();
        return redirect('forms');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $form = form::find($id);
        $form->delete();
        return redirect('forms')->with('success','Coin has been  deleted');

    }
}
