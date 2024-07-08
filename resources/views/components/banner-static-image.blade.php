<div class="w-full flex flex-col-reverse md:flex-row justify-center md:justify-between items-center px-20" style="background-image: url('{{asset('images/bg-location.png')}}');height:290px;">
    <div class="title content-center text-white poppins-bold text-4xl">
        <p class="" style="text-shadow: 2px 2px #8b8b8b;">{{$slot}}</p>
    </div>
    <div class="logo">
        <div class="content-center">
            <img src="{{asset('images/logo_transparan.png')}}" width="132" class="rounded-xl" />
        </div>
    </div>
</div>