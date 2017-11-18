<?php

namespace App\Http\Controllers;

use App\Suggestion;
use App\Classes\Notification;
use App\Http\Requests\SuggestionCreateRequest;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index()
    {
        // show all unread suggestions
        $suggestions = Suggestion::where('processed', false)->orderBy('created_at', 'ASC')->get();
        
        return view('suggestions.index')->with(compact('suggestions'));
    }
    
    public function process(Request $request) 
    {
        $suggestion = Suggestion::find($request->input('suggestion_id'));
        $suggestion->update(['processed' => true]);
        
        return redirect()->route('suggestions');
    }
    
    public function create()
    {
        return view('suggestions.create');
    }
    
    public function store(SuggestionCreateRequest $request)
    {
        $suggestion = Suggestion::create($request->only(['lyric', 'artist', 'twitter']));
        
        Notification::dm($suggestion);
        
        return redirect()->route('suggest')->withSuccess('Diolch am yr awgrym! Bydd yn cael ei ychwanegu i\'r casgliad, a byddi\'n cael dy @io yn y trydar');
    }    
}
