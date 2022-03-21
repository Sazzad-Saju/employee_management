const toggle = document.getElementById('toggle');
const sidebar = document.getElementById('sidebar');

// document.onclick = function (e) {
//     if (e.target.id !== 'sidebar' && e.target.id !== 'toggle') {
//         toggle.classList.remove('active');
//         sidebar.classList.remove('active');
//     }
// }

toggle.onclick = function () {
    toggle.classList.toggle('active');
    sidebar.classList.toggle('active');
}

//Initialize DateRangePicker for single date Elements
let date_format = "DD-MM-YYYY";
$('.singleDateRange').prop('readonly',true)
$('.singleDateRange').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,

    locale: {
        format: date_format
    }
})
$('.singleDateRange').val('')
$('.singleDateRange').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});


//Initialize DateRangePicker for Time selection
let time_format = "h:mm a";
let isTime24hFormat = "h:mm a" == 'H:mm'
$('.singleTimePicker').prop('readonly',true)
$('.singleTimePicker').daterangepicker({
    timePicker : true,
    singleDatePicker:true,
    timePicker24Hour : isTime24hFormat,
    locale : {
        format : time_format
    }
}).on('show.daterangepicker', function(ev, picker) {
    picker.container.find(".calendar-table").hide();
});
$('.singleTimePicker').val('')
$('.singleTimePicker').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});
