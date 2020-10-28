@extends("layouts.master") @section("content")
<!-- CSS 可以修改出 滑鼠指標轉為手指指標。
也可以修掉 <a> 的底線。
也可以做出選取到時產生出選取的漸變特效。
-->
<!-- onclick="location.href='http://127.0.0.1:8000/';" -->
<style>
#mask {
    background: rgba(112, 123, 124, 0.6);
}
</style>
<div class="w-100 display-1 font-weight-bold"
    style="font-family: 'Noto Serif TC', serif;">
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://bl3302files.storage.live.com/y4mIJ_e4kEFzzQF3Zk1tkiOpyHhxgZZExbBcBWEZrtfoiWn3ZiNAeIkns-FKm7q_lgDXRw43DNIJbtm7rDcxKJqruPWuRf_3CnQ7BNR0zl1J-1bcXfWVJ-0n0xVRggHS8F9WeL6gMoSf6jyaMjfwiKvQkOyl7kMEDiUcm5ZfBfwg5s72Nfkq5iJIdHK79AM6nb?width=3919&height=508&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 2px white;
    text-align: center;">我的菜園</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://2hd1ua.bl.files.1drv.com/y4mjJzFp0Xwy5Z5shcW5XQ8k5v_mHPFrCCLCj8u6fLM1o24q26B4uu0G0x8TsVGlDZeHDYoQUO8JRH8Wy7kyi0yQ2yHSrhMTGHTkUALe6W1JKaN7yGak4tJ-ukSXheZKZPr7zdBYGBRDV3Mcc1iuD-HNYjosKW88DSxB6o5s3z4K0F5WnpPsL5XrRx6FIbrHtFx-yToVwm1u7i1vf_tN24_BA?width=5207&height=1197&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 2px white;
    text-align: center;">我的契作合約</div>
        <br />
    </div>
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://2hd1ua.bl.files.1drv.com/y4mjJzFp0Xwy5Z5shcW5XQ8k5v_mHPFrCCLCj8u6fLM1o24q26B4uu0G0x8TsVGlDZeHDYoQUO8JRH8Wy7kyi0yQ2yHSrhMTGHTkUALe6W1JKaN7yGak4tJ-ukSXheZKZPr7zdBYGBRDV3Mcc1iuD-HNYjosKW88DSxB6o5s3z4K0F5WnpPsL5XrRx6FIbrHtFx-yToVwm1u7i1vf_tN24_BA?width=5207&height=1197&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask"
            style="font-size: 100px;
    -webkit-text-stroke: 2px white;
    text-align: center;">現在蔬菜多少錢</div>
        <br />
    </div>
    <!--
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://3nd1ua.bl.files.1drv.com/y4mDr3z7RVWqVui862_Ie_WDCvnwBJaJXTnZvbZ0WspBrkdjS6S52EZS2zbYaYPEf4qmGubPni3eawmiqQJC7xXUAhwrISR6HnIZ3y0lP_2cx-WQDd1T14lzb3BRcqUbaMYF5Ehxs4FYinPiVQuZCOv6Df2wmf9RO-nviCx-OmIOWEkFL3pwhc8B7tJnsqPUz3AKa381x8DlUU4PQXTgelicQ?width=2975&height=545&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div class="bg-light text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 2px white;">台灣現在種什麼</div>
        <br />
    </div> -->
    <div class="border border-info rounded-lg"
        style="background-image:
        url(https://3xd1ua.bl.files.1drv.com/y4mWKHmvYLD9t7rRfMAOSanPhKiPquPc3s8Gn5jeS6xK6iBmanKnLKptEJJAi_aL_fPRhmi4OapVJgd2to1JPwWCCe6fcg8HA3vz9ewr7qIJ3LjtwD0F1vGyu9lcIJZxHUCO_Q-lDngZRnViTdMgLaA8zGhpF7BCjr-KBQv_6JSE1p6C46Gy5ltGBlo6ONO1MFcBqnjSxRZfHnIhuJwV2kkPQ?width=5951&height=1228&cropmode=none);
    background-repeat: no-repeat;
    background-size: cover;
    border: none;"
        onclick="location.href='http://127.0.0.1:8000/';">
        <br />
        <div id="mask" class="text-center"
            style="font-size: 100px;
    -webkit-text-stroke: 2px white;
    text-align: center;">逛逛其他菜園</div>
        <br />
    </div>
</div>
@endsection
