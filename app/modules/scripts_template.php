<!-- jQuery 3 -->
<script src="../template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Morris chart -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../template/plugins/toastr/toastr.min.js"></script>

<!-- Toast -->
<script src="../../node_modules/toastr/toastr.js"></script>
<!-- Select2 -->
<script src="../template/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../template/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../template/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../template/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../template/bower_components/moment/min/moment.min.js"></script>
<script src="../template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../template/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../template/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../template/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script src="../template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../template/dist/js/demo.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>
<!-- Flip Clock -->
<script src="../template/plugins/FlipClock/compiled/flipclock.js"></script>
<script>
    $(document).ready(function()
    {
        if($('#checkTest').val()!="")
        {
                if($('#checkTest').val()>=1)
                {
                    $('#modal-success').modal({backdrop: 'static', keyboard: false})
                    $("#modal-success").modal("show");
                }
                /*
                else
                {
                    $('#modal-warning').modal({backdrop: 'static', keyboard: false})
                    $("#modal-warning").modal("show");
                }

                if(typeof $('#checkTest').val()=="undefined" || $('#checkTest').val()=="")
                {
                    $('#modal-maybe').modal({backdrop: 'static', keyboard: false})
                    $("#modal-maybe").modal("show");
                }
                */
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        timer();
    });
</script>
<script>
    function timer()
    {
        var timerVal=document.getElementById('timerValue').value;
        var clock = $('.clock').FlipClock(timerVal, {
            clockFace: 'MinuteCounter',
            language: 'spanish',
            countdown: true,
            callbacks: {
                stop: function() {
                    window.location.replace("comenzar_test_ingenieria.php");
                },
                interval: function() {
                    document.getElementById('timerValue').value-=1;
                    var minutes=Math.floor(document.getElementById('timerValue').value/60);
                    var seconds=document.getElementById('timerValue').value-(minutes*60);
                    document.getElementById('timer').value=minutes+" minutos con "+seconds+" segundos";
                    console.log(document.getElementById('timer').value);
                } 
            }
        });
    }
</script>
<script>
    $(document).ready(function(){
        var action="getPreguntas";
        $.ajax({
            url: "Ctrl_Pregunta.php",
            method: "POST",
            data: {action: action},
            success: function(a){
                $("#preguntas").html(a);
                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass   : 'iradio_minimal-blue'
                })
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass   : 'iradio_minimal-red'
                })
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass   : 'iradio_flat-green'
                })
            }
        });

        action="getPreguntasAptitudes";
        $.ajax({
            url: "Ctrl_Pregunta.php",
            method: "POST",
            data: {action: action},
            success: function(a){
                $("#preguntasAptitudes").html(a);
                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass   : 'iradio_minimal-blue'
                })
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass   : 'iradio_minimal-red'
                })
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass   : 'iradio_flat-green'
                })
            }
        });

        $("#btn").click(function(){
            var email=$("#email").val();
            var pass=$("#pass").val();
            var action="login";
            $.ajax({
                url: "Ctrl_Usuario.php",
                method: "POST",
                data: {email: email, pass: pass, action: action},
                beforeSend: function(a){
                    $("#result").text("Procesando peticion...");
                },
                success: function(a){
                    if(a.includes("ok"))
                    {
                        window.location.replace("index1.php");
                    }
                    else
                    {
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.error('Vuelva a intentarlo', 'Usuario no encontrado');

                        }, 1300);
                        $("#result").text("");
                    }
                },
                error: function(){
                    $("#result").text("Error");
                }
            });
        });
        // boton eliminar usuario
        $(".btnDeleteUser").click(function(){
            var ci=$(this).attr("primary");
            var action="eliminar";
            $.ajax({
                url: "Ctrl_Usuario.php",
                method: "POST",
                data: {ci: ci, action: action},
                beforeSend: function(a){
                    $("#result").text("Procesando peticion...");
                },
                success: function(a){
                    console.log(a);
                    if(a.includes("ok"))
                    {
                        location.reload();
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.success('El registro fue borrado exitosamente', 'Registro removido');
                        }, 1300);
                        $("#result").text("");
                    }
                    else
                    {
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.error('Vuelva a intentarlo', 'Error');

                        }, 1300);
                        $("#result").text("");
                    }
                },
                error: function(){
                    $("#result").text("Error");
                }
            });
        });
        // boton de registro Estudiantes
        $("#btnEstudiante").click(function(){
            var nombresE=$("#nombresE").val();
            var apellidosE=$("#apellidosE").val();
            var ciE=$("#ciE").val();
            var cursoE=$("#cursoE").val();
            var gestionE=$("#gestionE").val();
            var telefonoE=$("#telefonoE").val();
            var emailE=$("#emailE").val();
            var passE=$("#passE").val();
            var verPassE=$("#verPassE").val();
            var generoE=$("#generoE").val();
            var actionE="registerEstudiante";
            if(passE===verPassE)
            {
                $.ajax({
                    url: "Ctrl_Usuario.php",
                    method: "POST",
                    data: {nombres: nombresE,
                        apellidos: apellidosE,
                        ci: ciE,
                        curso: cursoE,
                        gestion: gestionE,
                        telefono: telefonoE,
                        email: emailE,
                        pass: passE,
                        genero: generoE,
                        action: actionE
                    },
                    beforeSend: function(a){
                        $("#result").text("Procesando peticion...");
                    },
                    success: function(a){
                        if(a.includes("ok"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.success('Ya puede iniciar sesion en el sistema', 'Registro exitoso');
                            }, 1300);
                            $("#result").text("");
                        }
                        else if(a.includes("no"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.error('Vuelva a intentarlo', 'Registro fallido'+a);
                            }, 1300);
                            $("#result").text("");
                        }
                    },
                    error: function(){
                        $("#result").text("Error");
                    }
                });
            }
            else
            {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.error('Las contraseñas no coinciden', 'Error');
                }, 1300);
            }
        });
        // boton de registro Psicologo
        $("#btnPsicologo").click(function(){
            var nombresP=$("#nombresP").val();
            var apellidosP=$("#apellidosP").val();
            var ciP=$("#ciP").val();
            var telefonoP=$("#telefonoP").val();
            var emailP=$("#emailP").val();
            var passP=$("#passP").val();
            var verPassP=$("#verPassP").val();
            var generoP=$("#generoP").val();
            var actionP="registerPsicologo";
            if(passP===verPassP)
            {
                $.ajax({
                    url: "Ctrl_Usuario.php",
                    method: "POST",
                    data: {nombres: nombresP,
                        apellidos: apellidosP,
                        ci: ciP,
                        telefono: telefonoP,
                        email: emailP,
                        pass: passP,
                        genero: generoP,
                        action: actionP
                    },
                    beforeSend: function(a){
                        $("#result").text("Procesando peticion...");
                    },
                    success: function(a){
                        if(a.includes("ok"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.success('Se ha registrado un nuevo psicologo', 'Registro exitoso');
                            }, 1300);
                            $("#result").text("");
                        }
                        else if(a.includes("no"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.error('Vuelva a intentarlo', 'Registro fallido'+a);
                            }, 1300);
                            $("#result").text("");
                        }
                    },
                    error: function(){
                        $("#result").text("Error");
                    }
                });
            }
            else
            {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.error('Las contraseñas no coinciden', 'Error');
                }, 1300);
            }
        });
        // boton de registro Estudiantes
        $("#btnEdit").click(function(){
            var tipoE=$("#tipoE").val();
            if(tipoE=="1")
            {
                var nombresE=$("#nombresE").val();
                var apellidosE=$("#apellidosE").val();
                var ciE=$("#ciE").val();
                var cursoE=$("#cursoE").val();
                var gestionE=$("#gestionE").val();
                var telefonoE=$("#telefonoE").val();
                var emailE=$("#emailE").val();
                var passE=$("#passE").val();
                var generoE=$("#generoE").val();
                var idE=$("#idE").val();
                var actionE="editUser";

                $.ajax({
                    url: "Ctrl_Usuario.php",
                    method: "POST",
                    data: {nombres: nombresE,
                        apellidos: apellidosE,
                        ci: ciE,
                        curso: cursoE,
                        gestion: gestionE,
                        telefono: telefonoE,
                        email: emailE,
                        pass: passE,
                        genero: generoE,
                        tipo: tipoE,
                        id: idE,
                        action: actionE
                    },
                    success: function(a){
                        if(a.includes("ok"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.success('Los cambios se realizaron correctamente, recargue la pagina para ver los cambios realizados', 'Actualizacion de datos exitosa');
                            }, 1300);
                        }
                        else
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.error('Vuelva a intentarlo', 'Actualizacion fallida');
                            }, 1300);
                        }
                    },
                    error: function(){
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.error('Vuelva a intentarlo', 'Error Interno');
                        }, 1300);
                    }
                });
            }
            else if(tipoE=="0")
            {
                var nombresE=$("#nombresE").val();
                var apellidosE=$("#apellidosE").val();
                var ciE=$("#ciE").val();
                var telefonoE=$("#telefonoE").val();
                var emailE=$("#emailE").val();
                var passE=$("#passE").val();
                var generoE=$("#generoE").val();
                var idE=$("#idE").val();
                var actionE="editUser";

                $.ajax({
                    url: "Ctrl_Usuario.php",
                    method: "POST",
                    data: {nombres: nombresE,
                        apellidos: apellidosE,
                        ci: ciE,
                        telefono: telefonoE,
                        email: emailE,
                        pass: passE,
                        genero: generoE,
                        tipo: tipoE,
                        id: idE,
                        action: actionE
                    },
                    success: function(a){
                        if(a.includes("ok"))
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.success('Los cambios se realizaron correctamente', 'Actualizacion de datos exitosa');
                            }, 1300);
                        }
                        else
                        {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    timeOut: 4000
                                };
                                toastr.error('Vuelva a intentarlo', 'Actualizacion fallida');
                            }, 1300);
                        }
                    },
                    error: function(){
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.error('Vuelva a intentarlo', 'Error Interno');
                        }, 1300);
                      }
                });
            }
        });
        //boton para aceptar cita
        $("#acceptDate").click(function(){
            var idm=$(this).attr("primary");
            var action="accept";
            $.ajax({
                url: "Ctrl_Citas.php",
                method: "POST",
                data: {idm: idm, action: action},
                success: function(a){
                    window.location.replace("index.php");
                }
            });
        });
        //boton para rechazar cita
        $("#rejectDate").click(function(){
            var idm=$(this).attr("primary");
            var action="reject";
            $.ajax({
                url: "Ctrl_Citas.php",
                method: "POST",
                data: {idm: idm, action: action},
                success: function(a){
                    window.location.replace("index.php");
                }
            });
        });
    })
</script>

<!-- Page script -->
<script>
    $(document).ready(function(){
        //$(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : false,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
        $('#example3').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    })
</script>
<script>

    new Morris.Bar({
        // ID of the element in which to draw the chart.
       element: 'chartInteres',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { ov: 'TI', value: $("#res_TI").val() },
            { ov: 'MP', value: $("#res_MP").val() },
            { ov: 'DC', value: $("#res_DC").val() },
            { ov: 'CQI', value: $("#res_CQI").val() },
            { ov: 'COM', value: $("#res_COM").val() },
            { ov: 'MA', value: $("#res_MA").val() },
            { ov: 'CP', value: $("#res_CP").val() },
            { ov: 'CA', value: $("#res_CA").val() },
            { ov: 'AR', value: $("#res_AR").val() },
            { ov: 'CT', value: $("#res_CT").val() }
        ],
        parseTime: false,
        // The name of the data record attribute that contains x-values.
        xkey: 'ov',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Porcentaje'],
        smooth: false,
        ymax: 100,
        postUnits: '%'
    });
       
</script>
<script>

    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'chartAptitud',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { ov: 'EP', value: $("#res_EP").val() },
            { ov: 'MC', value: $("#res_MC").val() },
            { ov: 'PE', value: $("#res_PE").val() },
            { ov: 'VE', value: $("#res_VE").val() },
            { ov: 'V', value: $("#res_V").val() },
            { ov: 'CB', value: $("#res_CB").val() },
            { ov: 'C', value: $("#res_C").val() },
            { ov: 'CA', value: $("#res_ACA").val() },
            { ov: 'A', value: $("#res_A").val() },
            { ov: 'CI', value: $("#res_CI").val() }
        ],
        parseTime: false,
        // The name of the data record attribute that contains x-values.
        xkey: 'ov',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Porcentaje'],
        smooth: false,
        ymax: 100,
        postUnits: '%'
    });

</script>
<script>
    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'chartPerfil',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { ov: 'EP/TI', a: $("#res_EP").val(), b: $("#res_TI").val() },
            { ov: 'MC/MP', a: $("#res_MC").val(), b: $("#res_MP").val() },
            { ov: 'PE/DC', a: $("#res_PE").val(), b: $("#res_DC").val() },
            { ov: 'VE/CQI', a: $("#res_VE").val(), b: $("#res_CQI").val() },
            { ov: 'V/COM', a: $("#res_V").val(), b: $("#res_COM").val() },
            { ov: 'CB/MA', a: $("#res_CB").val(), b: $("#res_MA").val() },
            { ov: 'C/CP', a: $("#res_C").val(), b: $("#res_CP").val() },
            { ov: 'CA/CA', a: $("#res_ACA").val(), b: $("#res_CA").val() },
            { ov: 'A/AR', a: $("#res_A").val(), b: $("#res_AR").val() },
            { ov: 'CI/CT', a: $("#res_CI").val(), b: $("#res_CT").val() }
        ],
        parseTime: false,
        // The name of the data record attribute that contains x-values.
        xkey: 'ov',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['a','b'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Aptitud','Interes'],
        smooth: false,
        ymax: 100,
        postUnits: '%'
    });
</script>