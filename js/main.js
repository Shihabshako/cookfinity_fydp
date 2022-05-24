$("form").on("change", ".file-upload-field", function(){
    $(this).parent(".file-upload-wraper").attr("data-text",$(this).val().replace(/.*(\/|\\)/,''));
})