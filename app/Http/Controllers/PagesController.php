<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    // Show single page
    public function show(Page $page) {
        $page->increment('visits_count');
        return view('pages.single', [
            'page' => $page
        ]);
    }

    // Show form to add page
    public function create() {
        return view('pages.create');
    }

    // Store page data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $formFields['slug'] = Str::slug($formFields['title'], '-');

        $page = Page::create($formFields);

        return redirect()->route('pages.edit', $page)
            ->with('info', 'Page has been created successfully');
    }

    // Show form to edit page
    public function edit(Page $page) {
        return view('pages.edit', [
            'page' => $page
        ]);
    }

    // Update page data
    public function update(Request $request, Page $page) {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $formFields['slug'] = Str::slug($formFields['title'], '-');

        $page->update($formFields);
        return back()->with('info', 'Page has been updated successfully');
    }

    // Delete page
    public function destroy(Page $page) {
        $page->delete();
        return back()->with('info', 'Page has been deleted successfully');
    }
}
