<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
class OpenAiController
{
    public function OpenAi(Request $request)
        {
            // $result = OpenAI::completions()->create([
            //     'model' => 'text-davinci-003',
            //     'prompt' => 'PHP is',
            // ]);
            
            // echo $result['choices'][0]['text'];
          
            $response = OpenAi::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $request->message],
                ],
            ]);
            return view('OpenAi',['text' => $response->choices[0]->message->content,
            'searsh' => $request->message]);
            dd($response);
            
        }

        public function AI()
        {
            return view('OpenAi',['text' => "",
         'searsh' => 'your question']);
        }
    }