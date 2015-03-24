$('document').ready(function(){

    $('.delete').click(function(){


        var Id = $(this).data('number');

        $('#id_project').val(Id);

         $('#confirm').modal('show');   


    });


});