$('.star').on("mouseover",function(){
        //get the id of star
        var star_id = $(this).attr('id');
        alert(star_id);
        switch (star_id){
            case "star-1":
                $("#star-1").addClass('star-checked');
                break;
            case "star-2":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                break;
            case "star-3":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                break;
            case "star-4":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                break;
            case "star-5":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").addClass('star-checked');
                break;
        }
    }).mouseout(function(){
        //remove the star checked class when mouseout
        $('.star').removeClass('star-checked');
    });
 
     
    $('.star').click(function(){
        //get the stars index from it id
        var star_index = $(this).attr("id").split("-")[1],
            product_id = $("#product_id").val(), //store the product id in variable
            product_id = $("#reviews").val(),
            star_container = $(this).parent(), //get the parent container of the stars
            result_div = $("#result"); //result div
         alert("hai");
        $.ajax({
            url: "user/input_rating",
            type: "POST",
            data: {star:star_index,product_id:product_id,reviews:reviews},
            beforeSend: function(){
                star_container.hide(); //hide the star container
                result_div.show().html("Loading..."); //show the result div and display a loadin message
            },
            success: function(data){
                result_div.html(data);
            }
        });
    });
 
   