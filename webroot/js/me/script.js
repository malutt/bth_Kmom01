$( "#textareaContent" ).click(function() {

    $(this).empty()
    $(".hide").show();
    $(this).animate({height: "100px"});
    $(this).slideDown( "slow" );
    $(this).css({ 'color': '#333333' });
    $("#commentFormInputs").show();
});