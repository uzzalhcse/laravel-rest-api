<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends ApiController
{
    public function store(NewsLetterRequest $request)
    {

        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email,['FNAME'=>$request->name]);
            return $this->success('Thanks For Subscribe');
        }
        return $this->error('Sorry! You have already subscribed');

    }
}
