@extends('layouts.app')
@section('content')   
    <div class="flex justify-center">       
        <div class="w-8/12 bg-white p-6 rounded-lg">

            @if (Session::has('success'))
                <div class="bg-red-500 rounded-lg text-white text-center p-4 mb-6">
                    {{ Session()->get('success')}}
                </div>                    
            @endif
            
            <h1 class="mb-8">Contact us</h1>
            <div class="col-md-12">
                <!--Start Contact Us 1st Column-->
                <form action="" method="post">
                 <input type="text" class="form-control" name="name" placeholder="Name"><br>
                 <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                 <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                 <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                 <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
                 <?php if(isset($msg)) {echo $msg; } ?>
                </form>
        </div>
    </div>
@endsection