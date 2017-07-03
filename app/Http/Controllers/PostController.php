<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
use App\Post;
use Image;
class PostController extends Controller
{
    public function __cinstruct(){
    	$this->middleware('auth');
    }

    public function newPost(Request $request){
    		$this->validate(request(),[
    				'post_title'   => 'required|max:140',
    				'post_content' => 'required'
    		]);
            $post = new Post();
    		$currentUserLoggedIn = Auth::User()->id;
            $ip_address          = $_SERVER['REMOTE_ADDR'];

    		if(request('featured64')){
                $featuredImage = request('featured64');

                list($type, $featuredImage) = explode(';', $featuredImage);
                list(, $featuredImage)      = explode(',', $featuredImage);

                $featuredImage     = base64_decode($featuredImage);
                $featuredImageName = $currentUserLoggedIn."_".time();

                file_put_contents($featuredImageName.'.jpg', $featuredImage);

                $finalfeaturedImage = $featuredImageName.'.jpg';

                $img = Image::make($finalfeaturedImage)->save(public_path('/uploads/featuredImages/' . $finalfeaturedImage));
                if(!$img){
                    \Session::flash('posterror', 'Error in Featured Image Uploading .Please try Again');
                    return redirect()->route('home');
                }else{
            		$post->featured_image = $finalfeaturedImage;           
                }
            }
            $post->user_id        = $currentUserLoggedIn;            
            $post->title 	      = request('post_title');
            $post->content        = request('post_content');
            $post->tags           = request('post_tags');
            $post->ip_address     = $ip_address;
            $savePost = $post->save();
            if($savePost){
            	\Session::flash('postsaved', 'Your Post has saved Successfully.');
            	return redirect()->route('home');
            }else{
                 \Session::flash('posterror', 'Oops!!! There is an error in Post Uploading .Please try Again');
                return redirect()->route('home');
            }
    }
}
