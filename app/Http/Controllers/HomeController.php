<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Message;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class HomeController extends Controller
{
   
    
    public function appointments(Request $request)
    {
        // Validate Form Data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'number'  => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'dept'    => 'nullable',
            'service' => 'nullable',
        ], [
            'name.required'    => 'Please provide your name.',
            'email.required'   => 'We need your email address.',
            'email.email'      => 'Please provide a valid email address.',
            'number.required'  => 'Please provide your contact number.',
            'subject.required' => 'Please provide the subject.',
        ]);
    
        // Save Data in Database
        $app             = new Appointment();
        $app->name       = $request->name;
        $app->email      = $request->email;
        $app->number     = $request->number;
        $app->subject    = $request->subject;
        $app->dept       = $request->dept;
        $app->service    = $request->service;
        $app->save();
    
        // Prepare Data for Email
        $data["email_to"] = 'info@royalsquad.us'; 
        $data["title"] = "New Appointment Request";
        $data["name"] = $request->name;
        $data["email"] = $request->email;
        $data["phone"] = $request->number;
        $data["subject"] = $request->subject;
        $data["dept"] = $request->dept;
        $data["service"] = $request->service;
    
        // Include PHPMailer
        require base_path("phpmailer/src/Exception.php");
        require base_path("phpmailer/src/PHPMailer.php");
        require base_path("phpmailer/src/SMTP.php");
    
        $mail = new PHPMailer(true);
    
        try {
            // Server Settings
            // $mail->isSMTP();
            $mail->Host = 'server354.web-hosting.com';  // Use the server's real hostname
            $mail->SMTPAuth = true;
            $mail->Username = 'info@royalsquad.us'; // Your Email Address
            $mail->Password = '3V12~LcMbV-#'; // Your Email Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
    
            // Uncomment this section to disable certificate verification
            /*
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            */
    
            // Recipients
            $mail->setFrom('info@royalsquad.us', 'Royal Squad');
            $mail->addAddress($data["email_to"]);
    
            // Email Content
            $mail->isHTML(true); 
            $mail->Subject = $data["title"];
            $mail->Body = "
                <h2>New Appointment Request</h2>
                <p><strong>Name:</strong> {$data['name']}</p>
                <p><strong>Email:</strong> {$data['email']}</p>
                <p><strong>Phone:</strong> {$data['phone']}</p>
                <p><strong>Subject:</strong> {$data['subject']}</p>
                <p><strong>Department:</strong> {$data['dept']}</p>
                <p><strong>Service:</strong> {$data['service']}</p>
            "; 
            $mail->AltBody = 'This is a plain-text message body for non-HTML email clients';
            
            $mail->send();
    
            session()->flash('form_submitted', true);
            return redirect()->back()->with('success', 'Appointment booked and email sent successfully!');
            
        } catch (Exception $e) {
            \Log::error('Mail send failed: ' . $mail->ErrorInfo);
            return response()->json(['error' => 'Sorry! Mail could not be sent. Please try again later.'], 500);
        }
    }
    
    

    public function messages(Request $request){
        $validatedData = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:10',
            'comments'  => 'required|string|max:255',
        ], [
            'name.required' => 'Please provide your name.',
            'email.required' => 'We need your email address.',
            'phone.email' => 'Please provide a valid email address.',
            'comments.required' => 'Department is required.',
        ]);

        $app            = new Message();
        $app->name      = $request->name;
        $app->email     = $request->email;
        $app->phone     = $request->phone;
        $app->comments  = $request->comments;
        $app->save();

        return redirect()->route('home')->with('success', 'Appointment booked successfully.');
    }
}
