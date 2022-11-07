<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OtpController;

// USERS CONTROLLERS
use App\Http\Controllers\Apis\User\UserProfileInformationController;


// PROJECTS CONTROLLERS
use App\Http\Controllers\Apis\Abbreviation\Private\UserAbbreviationsController;
use App\Http\Controllers\Apis\SubscribedCategoriesController;
use App\Http\Controllers\Apis\Abbreviation\Private\BookmarkedAbbreviationsController;

use App\Http\Controllers\Apis\Abbreviation\Public\AbbreviationController;
use App\Http\Controllers\Apis\Abbreviation\Public\AbbreviationCategoriesController;
use App\Http\Controllers\Apis\Abbreviation\Public\AbbreviationPublishersController;
use App\Http\Controllers\Apis\Abbreviation\Public\AcronymCategoriesController;
use App\Http\Controllers\Apis\Acronym\Private\BookmarkedAcronymsController;
use App\Http\Controllers\Apis\Acronym\Private\UserAcronymsController;
use App\Http\Controllers\Apis\Acronym\Public\AcronymController;
use App\Http\Controllers\Apis\Proverb\BookMarkedProverbController;
use App\Http\Controllers\Apis\Proverb\Private\UserProverbController;
use App\Http\Controllers\Apis\Proverb\Public\ProverbCategoriesController;
use App\Http\Controllers\Apis\Proverb\Public\ProverbController;
use App\Http\Controllers\Apis\Proverb\Public\ProverbPublishersController;
use App\Http\Controllers\Apis\Quiz\QuestionController;
use App\Http\Controllers\Apis\Quiz\QuizController;
use App\Http\Controllers\Apis\Quiz\UserQuestionController;
use App\Http\Controllers\Apis\Quiz\UserQuizController;
use App\Http\Controllers\Apis\Science\Public\BranchOfScienceController;
use App\Http\Controllers\Apis\Science\Private\BookmarkedBranchOfScienceController;
use App\Http\Controllers\Apis\Science\Private\UserBranchOfScienceController;
use App\Http\Controllers\Apis\Science\Public\BranchOfScienceCategoriesController;
use App\Http\Controllers\Apis\Science\Public\BranchOfSciencePublishersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



/*
|==========================================================================
| AUTH-ROUTES
|==========================================================================
*/
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function() {
        return auth()->user();
    });
    Route::get('/profile', function() {
        return auth()->user();
    });
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
Route::post('otp/send', [OtpController::class, 'sendOtp']);
Route::post('otp/verify', [OtpController::class, 'verifyOtp']);
Route::post('password/reset', [OtpController::class, 'resetPassword'])->middleware('auth:sanctum');



/*
|==========================================================================
| PROFILE-MANAGEMENT ROUTES
|==========================================================================
*/
Route::group(['middleware' => ['auth:sanctum']],
    function () {

    // PROFILE-INFORMATION
    Route::get('/profile/edit', [UserProfileInformationController::class, 'editProfile']);
    Route::post('/profile/update', [UserProfileInformationController::class, 'updateProfile']);
    Route::post('/profile/password/update', [UserProfileInformationController::class, 'updatePassword']);
    Route::delete('/profile/delete', [UserProfileInformationController::class, 'deleteProfile']);
});



/*
|==========================================================================
| PROJECT -> ABBREVIATIONS
|==========================================================================
*/
// PUBLIC-ROUTES
Route::prefix('abbreviations/')->group(function(){
    Route::get('', [AbbreviationController::class, 'abbreviations']);
    Route::get('search', [AbbreviationController::class, 'searchAbbreviations']);
    Route::get('/categories', [AbbreviationCategoriesController::class, 'categories']);
    Route::get('/category/{id}', [AbbreviationCategoriesController::class, 'categoryWithAbbreviations']);
    Route::get('/publishers', [AbbreviationPublishersController::class, 'publishers']);
    Route::get('/publisher/{id}', [AbbreviationPublishersController::class, 'publisherWithAbbreviations']);
});

// PROTECTED-ROUTES
Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum']],
    function () {
    
    // ABBREVIATIONS-CRUD
    Route::post('/abbreviation/multiple/store', [UserAbbreviationsController::class, 'storeMultiple']);
    Route::post('/abbreviation/multiple/delete', [UserAbbreviationsController::class, 'deleteMultiple']);
    Route::resource('/abbreviation', UserAbbreviationsController::class);

    // SUBSCRIBED-CATEGORIES
    Route::get('/subscribe/categories', [SubscribedCategoriesController::class, 'subscribedCategories']);
    Route::post('/subscribe/categories/add', [SubscribedCategoriesController::class, 'subscribeNewCategory']);
    Route::post('/subscribe/categories/remove', [SubscribedCategoriesController::class, 'unSubscribeSingle']);

    // BOOKMARKED-ABBREVIATIONS
    Route::get('/bookmark/abbreviation', [BookmarkedAbbreviationsController::class, 'bookmarkedAbbreviations']);
    Route::post('/bookmark/abbreviation/add', [BookmarkedAbbreviationsController::class, 'addToBookmarkList']);
    Route::post('/bookmark/abbreviation/remove/single', [BookmarkedAbbreviationsController::class, 'removeBookmarkedSingle']);
    Route::post('/bookmark/abbreviation/remove/multiple', [BookmarkedAbbreviationsController::class, 'removeBookmarkedMultiple']);
});

/*
|==========================================================================
| PROJECT -> ACRONYMS
|==========================================================================
*/
// PUBLIC-ROUTES
Route::get('/acronyms', [AcronymController::class, 'acronyms']);
Route::get('/categories', [AcronymCategoriesController::class, 'categories']);
Route::get('/category/{id}', [AcronymCategoriesController::class, 'categorieswithAcronyms']);
Route::get('/publishers', [UserAcronymsController::class, 'publishers']);
Route::get('/publisher/{id}', [UserAcronymsController::class, 'publisherWithAcronyms']);

// PROTECTED-ROUTES
Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum']],
    function () {
    
    // ACRONYM-CRUD
    Route::post('/acronym/multiple/store', [UserAbbreviationsController::class, 'storeMultiple']);
    Route::post('/acronym/multiple/delete', [UserAbbreviationsController::class, 'deleteMultiple']);
    // Route::resource('/acronyms', UserAcronymsController::class);

    // BOOKMARKED-ACRONYMS
    Route::get('/bookmark/acronym', [BookmarkedAcronymsController::class, 'bookmarkedAcronyms']);
    Route::post('/bookmark/acronym/add', [BookmarkedAcronymsController::class, 'addToBookmarkList']);
    Route::post('/bookmark/acronym/remove/single', [BookmarkedAcronymsController::class, 'removeBookmarkedSingle']);
    Route::post('/bookmark/acronym/remove/multiple', [BookmarkedAcronymsController::class, 'removeBookmarkedMultiple']);
});

/*
|==========================================================================
| PROJECT -> BBRANCH OF SCIENCE
|==========================================================================
*/
//PUBLIC-ROUTES
Route::get('/scienceBranches', [BranchOfScienceController::class, 'scienceBranches']);
Route::get('/categories', [BranchOfScienceCategoriesController::class, 'categories']);
Route::get('/category/{id}', [BranchOfScienceCategoriesController::class, 'categoryWithScienceBranches']);
Route::get('/publishers', [BranchOfSciencePublishersController::class, 'publishers']);
Route::get('/publisher/{id}', [BranchOfSciencePublishersController::class, 'publisherWithAbbreviations']);


// PROTECTED-ROUTES
Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum']],
    function () {
    
    // BRANCH-SCIENCE CRUD
    Route::post('/science-branch/multiple/store', [UserBranchOfScienceController::class, 'storeMultiple']);
    Route::post('/science-branch/multiple/delete', [UserBranchOfScienceController::class, 'deleteMultiple']);
    Route::resource('/science-branch', UserBranchOfScienceController::class);

    // BOOKMARKED-SCIENCE-BRANCH
    Route::get('/bookmark/science-branches', [BookmarkedBranchOfScienceController::class, 'bookmarkedScienceBranches']);
    Route::post('/bookmark/science-branch/add', [BookmarkedBranchOfScienceController::class, 'addToBookmarkList']);
    Route::post('/bookmark/science-branch/remove/single', [BookmarkedBranchOfScienceController::class, 'removeBookmarkedSingle']);
    Route::post('/bookmark/science-branch/remove/multiple', [BookmarkedBranchOfScienceController::class, 'removeBookmarkedMultiple']);
});

/*
|==========================================================================
| PROJECT -> PROVERBS
|==========================================================================
*/
//PUBLIC-ROUTES
Route::get('/proverbs', [ProverbController::class, 'proverbs']);
Route::get('/categories', [ProverbCategoriesController::class, 'categories']);
Route::get('/category/{id}', [ProverbCategoriesController::class, 'categoryWithProverbs']);
Route::get('/publishers', [ProverbPublishersController::class, 'publishers']);
Route::get('/publisher/{id}', [ProverbPublishersController::class, 'publisherWithProverbs']);


// PROTECTED-ROUTES
Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum']],
    function () {
    
    // PROVERB CRUD
    Route::post('/proverb/multiple/store', [UserProverbController::class, 'storeMultiple']);
    Route::post('/proverb/multiple/delete', [UserProverbController::class, 'deleteMultiple']);
    // Route::resource('/proverbs', UserProverbController::class);

    // BOOKMARKED-PROVERB
    Route::get('/bookmark/proverbs', [BookMarkedProverbController::class, 'bookmarkedProverbs']);
    Route::post('/bookmark/proverb/add', [BookMarkedProverbController::class, 'addToBookmarkList']);
    Route::post('/bookmark/proverb/remove/single', [BookMarkedProverbController::class, 'removeBookmarkedSingle']);
    Route::post('/bookmark/proverb/remove/multiple', [BookMarkedProverbController::class, 'removeBookmarkedMultiple']);
});


/*
|==========================================================================
| PROJECT -> Quiz
|==========================================================================
*/

// Quizz crud 
    Route::post('/quiz/store', [UserQuizController::class, 'store']);
    Route::get('/quiz/edit/{id}', [UserQuizController::class, 'edit']);
    Route::put('/quiz/update/{id}', [UserQuizController::class, 'update']);

//question crud

    Route::post('/question', [UserQuestionController::class, 'store']);
    Route::get('/question/edit/{id}', [UserQuestionController::class, 'edit']);
    Route::put('/question/update/{id}', [UserQuestionController::class, 'update']);

    //listings
    Route::get('/quiz/categories', [QuizController::class, 'quizCategories']);
    Route::get('/quizzes/{id}', [QuizController::class, 'quizzes']);
    Route::get('/quiz/questions/{id}', [QuizController::class, 'questions']);


// // BRANCHES-OF-SCIENCE
// Route::get('/branch-of-science', [BranchOfScienceController::class, 'index']);

// // PROVERBS
// Route::get('/proverb', [ProverbController::class, 'index']);
