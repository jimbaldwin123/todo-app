
// javascript functions for jimbaldwin.net

    $(document).ready(function(){
            $( ".edit-box" ).on( "click", ".confirm", function( event ) {
                    return window.confirm("Are you sure?");
            });
            
            // populate slug and desc
            // todo: restrict to tasks form 
            $('#name').blur(function(){
                    var str = $(this).val();
                    if ($('#description').val().length === 0 ){
                            $('#description').val(str);
                    }
                    var str = str.replace(/ /g, "-");
                    str = str.replace(/,/g, "_");
                    str = str.replace(/\//g, "-"); 
                    $('#slug').val(str);
            })
    })