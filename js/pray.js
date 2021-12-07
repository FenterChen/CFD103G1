$(function(){
  //愛情
  $('.love').mouseover(function(){
    $('.love').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/loveGod.png');
    $('.godTitle').text('月老');
    $('.love>.cateTitle').css('color','#573605');
    $('.love img').attr('src','img/pray/loveBrown.svg');
  });
  $('.love').mouseout(function(){
    $('.love').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.love>.cateTitle').css('color','#ffffff');
    $('.love img').attr('src','img/pray/love.svg');
  });

  //學業
  $('.study').mouseover(function(){
    $('.study').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/studyGod.png');
    $('.godTitle').text('文昌帝君');
    $('.study>.cateTitle').css('color','#573605');
    $('.study img').attr('src','img/pray/studyBrown.svg');
  });
  $('.study').mouseout(function(){
    $('.study').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.study>.cateTitle').css('color','#ffffff');
    $('.study img').attr('src','img/pray/study.svg');
  });

  //健康
  $('.health').mouseover(function(){
    $('.health').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/healthGod.png');
    $('.godTitle').text('保生大帝');
    $('.health>.cateTitle').css('color','#573605');
    $('.health img').attr('src','img/pray/healthBrown.svg');
  });
  $('.health').mouseout(function(){
    $('.health').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.health>.cateTitle').css('color','#ffffff');
    $('.health img').attr('src','img/pray/health.svg');
  });

  //平安
  $('.safety').mouseover(function(){
    $('.safety').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/safetyGod.png');
    $('.godTitle').text('媽祖');
    $('.safety>.cateTitle').css('color','#573605');
    $('.safety img').attr('src','img/pray/safetyBrown.svg');
  });
  $('.safety').mouseout(function(){
    $('.safety').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.safety>.cateTitle').css('color','#ffffff');
    $('.safety img').attr('src','img/pray/safety.svg');
  });

  //財富
  $('.wealth').mouseover(function(){
    $('.wealth').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/moneyGod.png');
    $('.godTitle').text('財神');
    $('.wealth>.cateTitle').css('color','#573605');
    $('.wealth img').attr('src','img/pray/moneyBrown.svg');
  });
  $('.wealth').mouseout(function(){
    $('.wealth').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.wealth>.cateTitle').css('color','#ffffff');
    $('.wealth img').attr('src','img/pray/wealth.svg');
  });

  //事業
  $('.work').mouseover(function(){
    $('.work').css('background-color', '#FDBF52');
    $('.prayImg img').attr('src','img/pray/workGod.png');
    $('.godTitle').text('關公');
    $('.work>.cateTitle').css('color','#573605');
    $('.work img').attr('src','img/pray/workBrown.svg');
  });
  $('.work').mouseout(function(){
    $('.work').css('background-color', '#927858');
    $('.prayImg img').attr('src','img/pray/unknownGod.png');
    $('.godTitle').text('祈願神明');
    $('.work>.cateTitle').css('color','#ffffff');
    $('.work img').attr('src','img/pray/work.svg');
  });

 
  $('select').change(function(){

    var selectvalue = $('select').val();

    if(selectvalue == '文昌帝君'){
      $('.prayImg img').attr('src','img/pray/studyGod.png');
      $('.godTitle').text('文昌帝君');
    }
    if(selectvalue == '保生大帝'){
      $('.prayImg img').attr('src','img/pray/healthGod.png');
      $('.godTitle').text('保生大帝');
    }
    if(selectvalue == '媽祖'){
      $('.prayImg img').attr('src','img/pray/safetyGod.png');
      $('.godTitle').text('媽祖');
    }
    if(selectvalue == '財神'){
      $('.prayImg img').attr('src','img/pray/moneyGod.png');
      $('.godTitle').text('財神');
    }
    if(selectvalue == '關公'){
      $('.prayImg img').attr('src','img/pray/workGod.png');
      $('.godTitle').text('關公');
    }
    if(selectvalue == '月老'){
      $('.prayImg img').attr('src','img/pray/loveGod.png');
      $('.godTitle').text('月老');
    }
  });
});