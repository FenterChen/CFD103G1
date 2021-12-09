$(function(){

// 會員登入
$('.textLogin').click(function(){
    $('.boxContainer').addClass('showAdd');
    $('.boxContainer2').removeClass('showLogin');

})

$('.textAdd2').click(function(){
    $('.boxContainer').removeClass('showAdd');
    $('.boxContainer2').addClass('showLogin');
});


// 會員資料修改
$('.textFixpwd').click(function(){
    $('.boxContainer2').removeClass('showAdd');
    $('.boxContainer').addClass('showLogin');
});

$('.textId2').click(function(){
    $('.boxContainer2').addClass('showAdd');
    $('.boxContainer').removeClass('showLogin');
    
});

// 個人紀錄
// 祈願
$('.mPray').bind('click',function(){
    $('.mPray').addClass('bold');
    $('.mPomes').removeClass('bold');
    $('.mOrder').removeClass('bold');

    $('.boxRec1').removeClass('showRec1');
    $('.boxRec2').addClass('showRec2');
    $('.boxRec3').addClass('showRec3');
});
// 求籤
$('.mPomes').bind('click',function(){
    $('.mPray').removeClass('bold');
    $('.mPomes').addClass('bold');
    $('.mOrder').removeClass('bold');

    $('.boxRec1').addClass('showRec1');
    $('.boxRec2').removeClass('showRec2');
    $('.boxRec3').addClass('showRec3');
});
// 訂單
$('.mOrder').bind('click',function(){
    $('.mPray').removeClass('bold');
    $('.mPomes').removeClass('bold');
    $('.mOrder').addClass('bold');
    
    $('.boxRec1').addClass('showRec1');
    $('.boxRec2').addClass('showRec2');
    $('.boxRec3').removeClass('showRec3');
});



// 手機版訂單切換
// 祈願左邊箭頭
$('.arrowR').click(function(){
    $('.boxRec1').addClass('showRec1');
    $('.boxRec2').removeClass('showRec2');
    $('.boxRec3').addClass('showRec3');
})

// 求籤
// 左邊箭頭
$('.arrowL').click(function(){
    $('.boxRec1').removeClass('showRec1');
    $('.boxRec2').addClass('showRec2');
    $('.boxRec3').addClass('showRec3');
})
// 右邊箭頭
$('.arrowR2').click(function(){
    $('.boxRec1').addClass('showRec1');
    $('.boxRec2').addClass('showRec2');
    $('.boxRec3').removeClass('showRec3');
})

// 訂單
// 左邊箭頭
$('.arrowL2').click(function(){
    $('.boxRec1').addClass('showRec1');
    $('.boxRec2').removeClass('showRec2');
    $('.boxRec3').addClass('showRec3');
})


});