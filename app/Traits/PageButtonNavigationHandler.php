<?php

    namespace App\Traits;

    use Illuminate\Http\Request;

    trait PageButtonNavigationHandler {
        public function handleNavigationButtons(string $elementName, Request $request){
            if ($request->has($elementName)){
                return $this->store($request);
            }
            else {
                return $this->goBack();
            }
        }

        abstract public function goBack(); //Implement the function so that the page goes back to somewhere
        abstract public function store(Request $request); //Implement the function so that the page stores something
    }


?>