<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Requests\CreateVideoRequest;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }
    /**
     * Pobieramy liste filmow
     */
    public function index()
    {
        $videos = Video::latest()->get();
    	return view('videos.index')->with('videos', $videos);
    }
      /**
     * Jeden film
     */
    public function show($id)
    {
    	$video = Video::findOrFail($id);
    	return view('videos.show')->with('video', $video);
    }

    /**
     * Wyswietla formularz dodawania filmu
     */
    public function create()
    {
        return view('videos.create');
    }
     /**
     * Zapisujemy film do bazy
     */
    public function store(CreateVideoRequest $request)
    {
        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        return redirect('videos');
    }

        /**
     * Formularz edycji filmu
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video',$video);

    }
        /**
     * Aktualizacja filmu
     */
    public function update($id, CreateVideoRequest $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect('videos');
    }

}
