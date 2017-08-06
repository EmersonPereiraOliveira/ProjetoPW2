$(document).ready(function(){
    alert("Entrou");
    $('#campo').keyup(function(){        
        $('form').submit(function(){
            var dados = $(this).serialize();            
            $.ajax({
                url:'localhost/ciAcademia/index.php/Attendance/listAttendances/',
                type: 'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
        });
        return false;
    });     
    $('form').trigger('submit');
});