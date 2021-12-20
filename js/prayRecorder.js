        $(function(){

        $('#bpray').bind('click',function(){
        
        $('.containerbox1').removeClass('showbox1');
        $('.containerbox2').addClass('showbox2');
        $('.containerbox3').addClass('showbox3');
            
            });

        $('#bcard').click(function(){
            $('.containerbox1').addClass('showbox1');
            $('.containerbox2').removeClass('showbox2');
            $('.containerbox3').addClass('showbox3');
        })

        $('#bsupply').click(function(){
            $('.containerbox1').addClass('showbox1');
            $('.containerbox2').addClass('showbox2');
            $('.containerbox3').removeClass('showbox3');
        })
        
        $('.showBtn').click(function(){
           
            $('.saveBtn').toggleClass('showbtnbox');
            $('.zodiac-button').toggleClass('showbtnbox');

            $('.firstpic2').toggleClass('showbtnbox');
        })





        $('#bpomes').bind('click',function(){
        
        $('.pomescontainerbox1').removeClass('showbox1');
        $('.pomescontainerbox2').addClass('showbox2');
        $('.pomescontainerbox3').addClass('showbox3');
            
            });

        $('#brecorder').click(function(){
            $('.pomescontainerbox1').addClass('showbox1');
            $('.pomescontainerbox2').removeClass('showbox2');
            $('.pomescontainerbox3').addClass('showbox3');
        })

        $('#pomecontent').click(function(){
            $('.pomescontainerbox1').addClass('showbox1');
            $('.pomescontainerbox2').addClass('showbox2');
            $('.pomescontainerbox3').removeClass('showbox3');
        })
        // $('#bcard').click(function(){
        //     alert();
        //     $('.containerbox1').addClass('showbox1');
        //     $('.containerbox2').removeClassClass('showbox2');
        //     $('.containerbox3').addClass('showbox3');
                
        //         });


// id
// bpray
// bcard
// bsupply

// // display none
// showbox1
// showbox2
// showbox3




        });