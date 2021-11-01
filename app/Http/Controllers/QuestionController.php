<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
	public function seedQuestions(Request $request){

		\DB::table('questions')->truncate();

		$question1 = new Question;
		$question2 = new Question;
		$question3 = new Question;
		$question4 = new Question;

		$question1->prompt = "Share something that makes you smile 😊";
		$question1->badges = "Dog videos,Memes";
		$question1->save();

		$question2->prompt = "Grounding rituals 🧘‍♀️";
		$question2->prompt2 = "What grounds you? Or what might you tell a friend in need of some calm?";
		$question2->badges = "An affirmation, Your grounding ritual";
		$question2->save();

		$question3->prompt = "What's something that gets you feeling creative?";
		$question3->badges = "An art project,A ted talk,A quote";
		$question3->save();


		//TODO 3 fields
		$question4->prompt = "Share your favorite music 🎶";
		$question4->prompt2 = "Attach a YouTube video! Also, why not share what this song means to you?";
		$question4->save();

		return true;
	}

	public function GetAll(){
		$questions = Question::all();
		return $questions;
	}
}
