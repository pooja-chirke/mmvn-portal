<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvolvedController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OnlineCourseController;
use App\Http\Controllers\VideoController;


/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');

/*
|--------------------------------------------------------------------------
| About Us Section
|--------------------------------------------------------------------------
*/

Route::view('/mavim-overview', 'mavim-overview')->name('mavim.overview');
Route::view('/vision-mission', 'vision-mission')->name('vision.mission');
Route::view('/coe-team', 'coe-team')->name('coe.team');

/*
|--------------------------------------------------------------------------
| Sidebar Pages
|--------------------------------------------------------------------------
*/

Route::view('/special-stories', 'knowledge.special-stories');
Route::view('/feedback', 'knowledge.feedback');
Route::view('/resources', 'knowledge.resources');
Route::view('/quizzes', 'knowledge.quizzes');
Route::view('/case-studies', 'knowledge.case-studies');
Route::view('/community', 'knowledge.community');
Route::view('/achievements', 'knowledge.achievements');
Route::view('/course-catalog', 'knowledge.course-catalog');
Route::view('/help', 'knowledge.help');

/*
|--------------------------------------------------------------------------
| Central of Excellence
|--------------------------------------------------------------------------
*/

Route::view('/technical-advisory', 'technical-advisory')->name('technical.advisory');
Route::view('/evidence-knowledge', 'evidence-knowledge')->name('evidence.knowledge');
Route::view('/advocacy-policy', 'advocacy-policy')->name('advocacy.policy');
Route::view('/partnership-promotion', 'partnership-promotion')->name('partnership.promotion');

/*
|--------------------------------------------------------------------------
| What We Do (Online Courses + Certifications)
|--------------------------------------------------------------------------
*/

// ================= WHAT WE DO =================
// ================= WHAT WE DO =================

// ✅ DIRECT ROUTES (for simple URLs)
Route::get('/courses', [OnlineCourseController::class, 'index']);
Route::view('/certifications', 'Whatwedo.certifications');
Route::view('/training', 'Whatwedo.training');
Route::view('/women-empowerment', 'Whatwedo.women');
Route::view('/climate-change', 'Whatwedo.climate');
Route::view('/skills', 'Whatwedo.skills');
Route::view('/workshops', 'Whatwedo.workshops');
Route::view('/advisory', 'Whatwedo.advisory');


// ✅ GROUPED ROUTES (for structured URLs)
Route::prefix('what-we-do')->group(function () {

    Route::get('/courses', [OnlineCourseController::class, 'index'])->name('courses');

    Route::view('/certifications', 'Whatwedo.certifications')->name('certifications');
    Route::view('/training', 'Whatwedo.training')->name('training');
    Route::view('/women-empowerment', 'Whatwedo.women')->name('women.empowerment');
    Route::view('/climate-change', 'Whatwedo.climate')->name('climate');
    Route::view('/skills', 'Whatwedo.skills')->name('skills');
    Route::view('/workshops', 'Whatwedo.workshops')->name('workshops');
    Route::view('/advisory', 'Whatwedo.advisory')->name('advisory');

});

/*
|--------------------------------------------------------------------------
| Knowledge Center
|--------------------------------------------------------------------------
*/

// Main Knowledge Page
Route::get('/knowledge', [KnowledgeController::class,'index'])->name('knowledge');


// ================= BLOG (DYNAMIC - CONTROLLER) =================
use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
Route::post('/blogs/comment', [BlogController::class, 'addComment'])->name('blogs.comment');
Route::get('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');


// ================= OTHER PAGES (STATIC - KEEP SAME) =================
Route::view('/ebooks', 'knowledge.ebooks')->name('ebooks');
Route::view('/publications', 'knowledge.publications')->name('publications');
Route::view('/research', 'knowledge.research')->name('research');
Route::view('/learning', 'knowledge.learning')->name('learning');
Route::view('/success-stories', 'knowledge.success')->name('success');
Route::view('/toolkits', 'knowledge.toolkits')->name('toolkits');
Route::view('/dashboard', 'knowledge.dashboard')->name('dashboard');
Route::view('/experts', 'knowledge.experts')->name('experts');


// ================= STRUCTURED ROUTES (OPTIONAL) =================
Route::prefix('knowledge')->group(function () {

    Route::get('/blogs', [BlogController::class, 'index']);

    Route::view('/ebooks', 'knowledge.ebooks');
    Route::view('/publications', 'knowledge.publications');
    Route::view('/research', 'knowledge.research');
    Route::view('/learning', 'knowledge.learning');
    Route::view('/success-stories', 'knowledge.success');
    Route::view('/toolkits', 'knowledge.toolkits');
    Route::view('/dashboard', 'knowledge.dashboard');
    Route::view('/experts', 'knowledge.experts');

});
/*
|--------------------------------------------------------------------------
| Gallery
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| GALLERY (FINAL CLEAN)
|--------------------------------------------------------------------------
*/

// MAIN GALLERY
Route::get('/gallery', [GalleryController::class,'index'])->name('gallery.index');

// PHOTO GALLERY (FIXED)
Route::get('/photo-gallery', [GalleryController::class,'index'])->name('gallery.photo');

// VIDEO
Route::get('/video-gallery', [VideoController::class,'index'])->name('gallery.video');

// EVENTS
Route::get('/events', [EventController::class,'index'])->name('gallery.events');

// CAMPUS
Route::view('/campus-tour', 'gallery.campus')->name('gallery.campus');

// VIDEO ACTIONS
Route::post('/video/like/{id}', [VideoController::class,'like'])->name('video.like');
Route::post('/video/comment/{id}', [VideoController::class,'comment'])->name('video.comment');



Route::get('/video-gallery', [VideoController::class,'index'])->name('gallery.video');





// ================= NEWS UPDATES =================
Route::prefix('news-updates')->group(function () {

    Route::view('/latest-news', 'news_updates.latest')->name('newsupdates.latest');
    Route::view('/upcoming-courses', 'news_updates.courses')->name('newsupdates.courses');
    Route::view('/events-calendar', 'news_updates.events')->name('newsupdates.events');
    Route::view('/webinar-schedule', 'news_updates.webinar')->name('newsupdates.webinar');
    Route::view('/social-media', 'news_updates.social')->name('newsupdates.social');
    Route::view('/notifications', 'news_updates.notifications')->name('newsupdates.notifications');

});

// ================= CONTACTS SUBMENU =================

Route::prefix('contacts')->name('contacts.')->group(function () {

    Route::view('/contact-us', 'contacts.contact')->name('contact');

    Route::view('/support-centre', 'contacts.support')->name('support');

    Route::view('/help-desk', 'contacts.helpdesk')->name('helpdesk');

    Route::view('/grievance', 'contacts.grievance')->name('grievance');

    Route::view('/partner', 'contacts.partner')->name('partner');

    Route::view('/technical', 'contacts.technical')->name('technical');

    Route::view('/application-form', 'contacts.application')->name('application');

    Route::view('/faqs', 'contacts.faqs')->name('faqs');

});
// ================= ADMIN PANEL =================
Route::prefix('admin')->group(function () {

    Route::get('/gallery/create', [GalleryController::class,'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class,'store'])->name('gallery.store');

    Route::get('/video/create', [VideoController::class,'create'])->name('video.create');
    Route::post('/video/store', [VideoController::class,'store'])->name('video.store');

    Route::get('/events/create', [EventController::class,'create'])->name('events.create');
    Route::post('/events/store', [EventController::class,'store'])->name('events.store');

});


/*
|--------------------------------------------------------------------------
| Media
|--------------------------------------------------------------------------
*/



// Main Media Page
Route::get('/media', [MediaController::class,'index'])->name('media.index');

// ✅ MEDIA SUBMENU (FRONTEND)
Route::prefix('media')->group(function () {

    Route::view('/press-release', 'media.press')->name('media.press');
    Route::view('/media-coverage', 'media.coverage')->name('media.coverage');
    Route::view('/announcements', 'media.announcements')->name('media.announcements');
    Route::view('/newsletters', 'media.newsletters')->name('media.newsletters');
    Route::view('/awards', 'media.awards')->name('media.awards');

});


/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/
Route::view('/contact', 'contacts.contact')->name('contact');
Route::post('/contact/store', [ContactController::class,'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Get Involved
|--------------------------------------------------------------------------
*/

Route::get('/get-involved', [InvolvedController::class,'index'])->name('involved');
Route::post('/involved/store', [InvolvedController::class,'store'])->name('involved.store');

/*
|--------------------------------------------------------------------------
| Course Enrollment
|--------------------------------------------------------------------------
*/

Route::get('/enroll/{course}', [CourseController::class,'form'])->name('enroll.form');
Route::post('/enroll/store', [CourseController::class,'store'])->name('enroll.store');

/*
|--------------------------------------------------------------------------
| Translate API
|--------------------------------------------------------------------------
*/

Route::post('/translate', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'translated_text' => 'Demo Translation'
    ]);
});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/news/create', [NewsController::class,'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class,'store'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class,'edit'])->name('news.edit');
    Route::post('/news/update/{id}', [NewsController::class,'update'])->name('news.update');
    Route::get('/news/delete/{id}', [NewsController::class,'destroy'])->name('news.delete');

    Route::get('/gallery', fn() => view('gallery.photo'));
    Route::get('/gallery/create', [GalleryController::class,'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class,'store'])->name('gallery.store');
    Route::get('/gallery/edit/{id}', [GalleryController::class,'edit'])->name('gallery.edit');
    Route::post('/gallery/update/{id}', [GalleryController::class,'update'])->name('gallery.update');
    Route::get('/gallery/delete/{id}', [GalleryController::class,'destroy'])->name('gallery.delete');

    Route::get('/media/create', [MediaController::class,'create'])->name('media.create');
    Route::post('/media/store', [MediaController::class,'store'])->name('media.store');
    Route::get('/media/edit/{id}', [MediaController::class,'edit'])->name('media.edit');
    Route::post('/media/update/{id}', [MediaController::class,'update'])->name('media.update');
    Route::get('/media/delete/{id}', [MediaController::class,'destroy'])->name('media.delete');

   

    Route::get('/messages', [ContactController::class,'messages'])->name('contact.messages');
    Route::get('/messages/delete/{id}', [ContactController::class,'destroy'])->name('contact.delete');

    Route::get('/volunteers', [InvolvedController::class,'volunteers'])->name('volunteers.list');
    Route::get('/volunteers/delete/{id}', [InvolvedController::class,'destroy'])->name('volunteers.delete');

}); 