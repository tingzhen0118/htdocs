@extends("layouts.master") @section("content")
<style>
#mask {
    background: rgba(0, 125, 124, 0.6);
} /*文字灰底*/
#Fhead {
    font-size: 30px;
    text-align: left;
    font-family: ‘cwTeXKai’, serif;;
}
</style>
<div class="w-100 display-1 font-weight-bold"
    style="font-family: 'Noto Serif TC', serif;">
    <div id="mask" class="text-center"
        style="font-size: 50px;
    -webkit-text-stroke: 0.5px white;
    text-align: center;">我的菜園</div>
    <hr>
    <div id="Fhead">
        @csrf
        <form style="width: 100%" action="" method="post">
            <table class="table-hover table-dark" width="100%">
                菜園名稱：
                <input type=text name=gardenname size=20 placeholder="田鼠愛吃菜">
                <br> 菜園簡介：
                <input type=text name=gardenname size=40
                    placeholder="我種的瓜大又甜，菜翠綠且酥脆，逛逛我的菜園吧">
                <br>
                </div>
                </div>
                @endsection