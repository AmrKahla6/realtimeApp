<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class LikeController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }
   public function likeIt(Reply $reply)
   {

    $reply->like()->create([
        // 'user_id' => auth()->id,
        'user_id' => '4',
        ]);
   }// end of like it

   public function unLikeIt(Reply $reply)
   {

    // $reply->like()->where(['user_id' , auth()->id()])->first()->delete();
    $reply->like()->where('user_id' , '4')->first()->delete();

    return response(null ,  Response::HTTP_NO_CONTENT);

   }// end of unlike it


}// end of controller
