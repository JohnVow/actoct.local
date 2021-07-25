<?php namespace ArtDark\EasyMarket\Classes;

use Validator;
use Session;
use App;
use Mail;
use ArtDark\EasyMarket\Models\Order;
use ArtDark\EasyMarket\Models\Required;
use ArtDark\EasyMarket\Models\Review;
use ArtDark\EasyMarket\Models\Setting;
use Lovata\Shopaholic\Models\Product;
use Illuminate\Http\Request;
use DB;

class Send
{
    public static function sendData($url)
    {
        $page = [];
        # Выставляем локализацию сообщений для валидатора
        $locale = config('app.locale');
        App::setLocale($locale);
        $post = post();
        # Время повторной отправки в секундах
        $setting = Setting::where('active',1)->first();
        $type = $post['type'];

        ($setting->time_reshipment) ? $repiatTime = $setting->time_reshipment: $repiatTime = 60;


        $name = $phone = $email = $message = $checkbox = $product_id = $required = $product = $rating = null;


        $isNotNullFild =  $validate_condition = array();


       if($post['required'] != null ) $explode_req = explode(',',$post['required']);



        foreach ($post as $key => $field) {

            switch($key) {
                case "name":
                    $name = trim(e($post[$key]));
                    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.name') => $name];
                    $condition = 'min:2|max:21';
                    foreach ($explode_req as $r)
                    {
                        if ($r == 'name'){
                            $condition = 'required|'.$condition;
                            break;
                        }
                    }
                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.name') => $condition];
                    break;
                case "phone":
                    $phone = trim(e($post[$key]));
                    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.phone') => $phone];
                    $condition = 'min:6|max:21';
                    foreach ($explode_req as $r)
                    {
                        if ($r == 'phone'){
                            $condition = 'required|'.$condition;
                            break;
                        }
                    }
                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.phone') => $condition];
                    break;
                case "email":
                    $email = trim(e($post[$key]));
                    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.email') => $email];
                    $condition = 'email';
                    foreach ($explode_req as $r)
                    {
                        if ($r == 'email'){
                            $condition = 'required|'.$condition;
                            break;
                        }
                    }
                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.email') => $condition];
                    break;
                case "message":
                    $message = trim(e($post[$key]));
                    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.message') => $message];
                    $condition = 'min:3|max:1000';
                    foreach ($explode_req as $r)
                    {
                        if ($r == 'message'){
                            $condition = 'required|'.$condition;
                            break;
                        }
                    }
                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.message') => $condition];
                    break;
                case "accepted":
                    $accepted = trim(e($post[$key]));
                    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.accepted') => $accepted];
                    $condition = '';
                    foreach ($explode_req as $r)
                    {
                        if ($r == 'accepted' ){
                            $condition = 'accepted|'.$condition;
                            break;
                        }
                    }
                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.accepted') => $condition];
                    break;
                case "itemid":
                    $product_id = trim(e($post[$key]));
                    break;
                case "rating":
                	if($setting->review_rating) {
	                	$rating = trim(e($post[$key]));
	            	    $isNotNullFild+=[\Lang::get('artdark.easymarket::lang.fields.rating') => $rating];
	                    $condition = 'required';
	                    $validate_condition+=[\Lang::get('artdark.easymarket::lang.fields.rating') => $condition];
                	}
                	break;

            }
        }



        $validator = Validator::make($isNotNullFild,$validate_condition);

        if ($validator->fails())
        {
            $errors =  $validator->messages()->all();
            foreach ($errors as $i) {
                echo "<div class='error'>$i</div>";
            }

        } else {

            if( Session::get('repeat')!= "" && time() < Session::get('repeat') )
            {
                $timeDiff = Session::get('repeat') - time();
                echo "<div class='error'>".\Lang::get('artdark.easymarket::lang.settings.time_res1')." $timeDiff ".\Lang::get('artdark.easymarket::lang.settings.second')."</div>";
            }
            else
            {

                switch($type) {
                    case 'order':
                        $order = new Order;
                        $order->name = ($name != null) ? $name: '—';
                        $order->email = ($email != null) ? $email: '—';
                        $order->phone = ($phone != null) ? $phone: '—';
                        $order->message = ($message != null) ? $message: '—';
                        $order->ip = $_SERVER['REMOTE_ADDR'];
                        $order->product_id = $product_id;
                        $order->save();

                        $explode_url = explode('/',$url);

                        $product = Product::where('id', $product_id)->first();

                        if(array_pop($explode_url) != $product->slug) {
                            $url = $url.'/'.$product->slug;
                        }

                        $vars = ['product' => $product, 'url' => $url, 'order' => $order,
                            'setting' => $setting];

                        $message_send = Send::sendMail($type, $setting, $vars);

                        break;
                    case 'required':
                        $required = new Required;
                        $required->name = ($name != null) ? $name: '—';
                        $required->email = ($email != null) ? $email: '—';
                        $required->phone = ($phone != null) ? $phone: '—';
                        $required->message = ($message != null) ? $message: '—';
                        $required->ip = $_SERVER['REMOTE_ADDR'];
                        $required->save();


                        $vars = ['required' => $required,'setting' => $setting];

                        $message_send = Send::sendMail($type, $setting, $vars);
                        break;
                    case 'reviews':
                        $review = new Review;
                        $review->name = ($name != null) ? $name: '—';
                        $review->email = ($email != null) ? $email: '—';
                        $review->phone = ($phone != null) ? $phone: '—';
                        $review->message = ($message != null) ? $message: '—';
                        $review->ip = $_SERVER['REMOTE_ADDR'];
                        $review->rating = ($rating != null) ? $rating: 0;
                        $review->save();

                        $vars = ['review' => $review,'setting' => $setting];

                        $message_send = Send::sendMail($type, $setting, $vars);
                        break;
                }
                echo "<script>showDone('$message_send');closeModal(4000);</script>";
                Session::put('repeat', time() + $repiatTime);
            }


        }


    }

    public static function sendMail($type,$settings,$vars)
    {

        $user_template = $admin_template = $admin_emails = $message = null;
        $user_send = $admin_send = $user_email = false;

        switch ($type) {
            case 'order':
                $user_template = 'artdark.easymarket::mail.user.order';
                $admin_template = 'artdark.easymarket::mail.admin.order';
                if ($settings->s_order_user) {
                    if ($vars['order']->email != '—') $user_email = $vars['order']->email;
                    $user_send = true;
                }
                if ($settings->s_order_admin) {
                    $admin_send = true;
                    if(count($settings->s_order_admin_emails) > 0) $admin_emails = $settings->s_order_admin_emails;
                }
                $message = 'artdark.easymarket::lang.order.order_send';
                break;
            case 'required':
                $user_template = 'artdark.easymarket::mail.user.required';
                $admin_template = 'artdark.easymarket::mail.admin.required';
                if ($settings->s_required_user) {
                    if ($vars['required']->email != '—') $user_email = $vars['required']->email;
                    $user_send = true;
                }
                if ($settings->s_required_admin) {
                    $admin_send = true;
                    if(count($settings->s_required_admin_emails) > 0) $admin_emails = $settings->s_required_admin_emails;
                }
                $message = 'artdark.easymarket::lang.required.required_send';
                break;
            case 'reviews':
                $user_template = 'artdark.easymarket::mail.user.review';
                $admin_template = 'artdark.easymarket::mail.admin.review';
                if ($settings->s_review_user) {
                    if ($vars['review']->email !== '—') $user_email = $vars['review']->email;
                    $user_send = true;
                }
                if ($settings->s_review_admin) {
                    $admin_send = true;
                    if(count($settings->s_review_admin_emails) > 0) $admin_emails = $settings->s_review_admin_emails;
                }
                $message = 'artdark.easymarket::lang.reviews.reviews_send';
                break;
        }

        if ($user_send and $user_email != null) {
            Mail::send($user_template, $vars, function($message) use ($settings, $user_email)
            {
                $message->from('noreply@'.$_SERVER['HTTP_HOST'],$settings->shop_name);
                $message->to($user_email);
            });
        }

        if ($admin_send and $admin_emails != null) {

            Mail::send($admin_template, $vars, function($message) use ($settings, $admin_emails)
            {
                $message->from('noreply@'.$_SERVER['HTTP_HOST'], $settings->shop_name);
                foreach ($admin_emails as $mail) {
                    $message->to($mail['Email']);
                }
            });
        }

        return  \Lang::get($message);

    }

}