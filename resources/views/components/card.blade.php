<div {{ $attributes->class(['rounded-xl py-10 px-7 bg-white shadow-lg']) }}>
    <div class="poppins-semibold text-hijau1 text-[20px]" >{{ $title }}</div>
    <div class="poppins-medium text-[18px] mt-5">{{$slot}}</div>
    <div class="flex mt-10">
        <div>
            <img src="{{$src}}" class="rounded-full w-20"/>
        </div>
        <div class="content-center ps-5 text-[18px]">
            <p class="poppins-semibold">{{$name}}</p>
            <p class="poppins-medium">{{$rule}}</p>
        </div>
    </div>
</div>