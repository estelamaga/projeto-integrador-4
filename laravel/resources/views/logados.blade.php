@extends('layouts.master')
@section('content')

<div class="container-fulid">
  <h1 class="logados"><?php echo "Ola, $emailSessao"; ?></h1>
   <p id="teste"><a class="logoff" href="logoff.php">Logout</a></p>
</div>

@stop
