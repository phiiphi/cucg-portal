$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});

$(document).ready(function() {
       //when page loads
        // $(':input[type="submit"]').prop('disabled', true);

        //when start typing
        // $('input[type="text"]').keyup( function(){
        //     if($(this).val() != '' ) {
        //         $(':input[type="submit"]').prop('disabled', false);
        //     }

        // });

        // var input = $('input[name="index_number[]"]').val();
        // if(input.length == 12 ) {
        //     $(':input[type="submit"]').prop('disabled', false);
        // }

         // //when signup button clicked
        $('.button').on('click', function(){
            
            var indexNumber = $('#index_number').val();

            if(indexNumber != "" && indexNumber.length == 13){
                $('.loading-icon').removeClass('off');
                $('.btn-text').text('Loading');
            }
        
            // var input = $('input[type="text[]"]').val();
            // if(input.length != 13 ) {
            //     $('.loading-icon').removeClass('off');
            //     $('.btn-text').text('Loading');
            //}
        });

        // //when verify button clicked
        $('.verifyButton').on('click', function(){
            var code = $('#code').val();

            if(code != "" && code.length == 4){
                $('.loading-icon').removeClass('off');
                $('.btn-text').text('Loading');
            }
        });
});


