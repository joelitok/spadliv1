

<?php
//namespace App\Http\Controllers;
use Auth;

class FrontEndController extends Controller
{
function detail(){
    
return redirect()->route('detail')->with('success', "your have add new post !");
}


    
}


?>
