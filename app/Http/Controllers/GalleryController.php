<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = gallery::all();
        // return view('gallery.index', compact('images'));
        return view('site.gallery', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($files=$request->file('images')){
            foreach($files as $file){
                $galary = new gallery();
                $name=$file->getClientOriginalName();
                $file->move('image',$name);
                $galary->image = '/image/'.$name;
                $galary->cat_name = $request->cat_name;
                $galary->title = $request->title;
                $galary->save();
            }
        }
        return redirect('/gallery')->with('success', 'category saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $images = gallery::where('cat_name',$id)->get();
        $data = [
            'name'  => $id,
            'images'   => $images            
        ];
        // return view('gallery.category', compact('data'));
        return view('site.gallery-category', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = gallery::find($id);
        return view('gallery.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $galary = gallery::find($id);

        if($files=$request->file('images')){                            
            $name=$files->getClientOriginalName();
            $files->move('image',$name);
            $galary->image = '/image/'.$name;
            $galary->cat_name = $galary->cat_name;
            $galary->title = $request->title;
            $galary->save();
            
            return redirect('/gallery')->with('success', 'Image Updated!');
        }
    }
    public function demoupadate(Request $request){
        $id = $request->id;
        $galary = gallery::find($id);

        if($files=$request->file('images')){                            
            $name=$files->getClientOriginalName();
            $files->move('image',$name);
            $galary->image = '/image/'.$name;
            $galary->cat_name = $galary->cat_name;
            $galary->title = $request->title;
            $galary->save();
            
            return redirect('/adminpanel')->with('success', 'Image Updated!');
        }
    }


    public function emaildata(Request $request){
        $username = strstr($request->email, '@', true);
        $help = "helpfurniturefm@gmail.com";
        $data = array(
            'email' => $request->email,
            'files' => $request->images,      
            'help' => $help,
            'user' => $username,
        );
        Mail::send('emails.send', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Furniture FM review');
            $message->from('helpfurniturefm@gmail.com');
        });
        return redirect('/')->with('success', 'Mail Sent');
    }


    public function emailShare(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'notes' => $request->notes,
            'images' => $request->images,
        );
        Mail::send('emails.quotation', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Quotation Request');
            $message->from('helpfurniturefm@gmail.com');
        });
        return redirect('/')->with('success', 'Mail sent');
    }


            // $attachments = $data['files'];
            // $message->attach($data['files'][0]); 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = gallery::find($id);
        $image->delete();

        return redirect('/gallery')->with('success', 'Image deleted!');
    }
}
