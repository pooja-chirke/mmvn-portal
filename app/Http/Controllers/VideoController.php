<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Http; // NEW

class VideoController extends Controller
{
    // ================= ORIGINAL (UNCHANGED) =================
    public function index()
    {
        $videos = Video::latest()->get();

        // 🔥 NEW: YouTube API DATA
        $youtubeVideos = $this->fetchYouTubeVideos();

        return view('gallery.video', compact('videos', 'youtubeVideos'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'url' => 'required'
        ]);

        Video::create([
            'title' => $request->title,
            'category' => $request->category,
            'url' => $this->convertToEmbed($request->url),
            'description' => $request->description,
            'is_live' => $request->is_live ?? false,
            'likes' => 0,
            'comments' => json_encode([])
        ]);

        return redirect()->back()->with('success', 'Video added!');
    }

    private function convertToEmbed($url)
    {
        if (str_contains($url, 'watch?v=')) {
            return str_replace('watch?v=', 'embed/', $url);
        }
        return $url;
    }

    // ================= NEW FEATURES =================

    // 🔥 YouTube API FETCH
    private function fetchYouTubeVideos()
    {
        $apiKey = env('YOUTUBE_API_KEY');

        if(!$apiKey) return [];

        try {
            $response = Http::get("https://www.googleapis.com/youtube/v3/search", [
                'part' => 'snippet',
                'q' => 'NGO women empowerment',
                'type' => 'video',
                'maxResults' => 6,
                'key' => $apiKey
            ]);

            $videos = [];

            if ($response->successful()) {
                foreach ($response['items'] as $item) {
                    $videos[] = [
                        'title' => $item['snippet']['title'],
                        'url' => 'https://www.youtube.com/embed/' . $item['id']['videoId'],
                        'thumbnail' => $item['snippet']['thumbnails']['medium']['url'],
                        'description' => $item['snippet']['description'],
                    ];
                }
            }

            return $videos;

        } catch (\Exception $e) {
            return [];
        }
    }

    // 👍 LIKE SYSTEM
    public function like($id)
    {
        $video = Video::find($id);
        if($video){
            $video->increment('likes');
        }
        return back();
    }

    // 💬 COMMENT SYSTEM
    public function comment(Request $request, $id)
    {
        $video = Video::find($id);

        if($video){
            $comments = json_decode($video->comments ?? '[]', true);
            $comments[] = $request->comment;

            $video->update([
                'comments' => json_encode($comments)
            ]);
        }

        return back();
    }
}