<?php 
use App\User;
use App\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

	function Notification($user_id, $type, $message)
	{
		$check = Notification::where(['user_id' => $user_id, 'type' => $type, 'message' => $message])->count();
		if ($check === 0) {
			$notification = new Notification();
			$notification->user_id = $user_id;
			$notification->type = $type;
			$notification->message = $message;
			$notification->save();

			$details = [
			        'message' => $message,
			    ];
			if ($type == "Admin") {
				// Mail::to('smilepassport5@gmail.com')->send(new \App\Mail\EmailNotification($details));
				Mail::to('arhamkhaninnocent@gmail.com')->send(new \App\Mail\EmailNotification($details));
			}else{
				$user = User::find($user_id);
				Mail::to($user->email)->send(new \App\Mail\EmailNotification($details));

			}
		}
	}

	
?>