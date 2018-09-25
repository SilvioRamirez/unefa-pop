$.extend( true, $.fn.dataTable.defaults, {
    dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
             "<'row'<'col-sm-12'tr>>" +
             "<'row'<'col-sm-4'i><'col-sm-8'p>>",
    "language": {
        "oPaginate": {
            "sNext": '<i class="fa fa-forward"></i>',
            "sPrevious": '<i class="fa fa-backward"></i>',
            "sFirst": '<i class="fa fa-step-backward"></i>',
            "sLast": '<i class="fa fa-step-forward"></i>' 
        },
    },
    "pagingType": 'full_numbers', 
    "sAjaxDataProp": '',
    "aaSorting": [ ],
});





/*
$.validator.setDefaults({
    errorElement: "span",
    errorClass: "help-block",
    highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass('has-error');
        $(element).closest('.form-group').removeClass('has-success');
        $(element).closest('.form-group').find('i.fa.fa-check').remove();
        $(element).closest('.form-group').find('i.fa.fa-exclamation').remove();
        $(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback" style="position: absolute; margin:40px 25px 40px 40px; z-index:1000;"></i>');
    },

    unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').addClass('has-success');
        $(element).closest('.form-group').find('i.fa.fa-exclamation').remove();
        $(element).closest('.form-group').find('i.fa.fa-check').remove();
        $(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback" style="position: absolute; margin:40px 25px 40px 40px; z-index:1000;"></i>');

    },
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});*/