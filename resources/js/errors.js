
var errors = "";
@foreach ($errors->all() as $error)
    var error = {!! json_encode($error) !!}; //Escaping is nodig hier, deze errors worden alleen getoond!
    errors += error + "\n";
@endforeach
alert(errors);
