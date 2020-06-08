$(document).ready(function() {


    function calcscore() {
      var score = 0;
    
      $(".acf-radio-list:checked").each(function() {
        score += parseInt($(this).val(), );
        console.log(score)
      });
      $("input[name=sum]").val(score)
    }
    $().ready(function() {
      $(".acf-radio-list").change(function() {
        calcscore()
        
      });
    });

    
    
    })