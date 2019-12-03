


$(function () {
    $(".datepicker").datepicker();
});


$(function () {
    $(".autocomplete").autocomplete({
        source: base_url + "/searchCities",
        minLength: 2,
        select: function (event, ui) {
            
//            console.log(ui.item.value);
        }


    });
});



////room.php
//var eventDates = {};
//var dates = ['02/15/2019', '02/16/2019', '02/25/2019'];
//for (var i = 0; i <= dates.length; i++)
//{
//    eventDates[ new Date(dates[i])] = new Date(dates[i]);
//}


//$(function () {
//    $("#avaiability_calendar").datepicker({
//        onSelect: function (data) {
//
////            console.log($('#checkin').val());
//
//            if ($('#checkin').val() == '')
//            {
//                $('#checkin').val(data);
//            } else if ($('#checkout').val() == '')
//            {
//                $('#checkout').val(data);
//            } else if ($('#checkout').val() != '')
//            {
//                $('#checkin').val(data);
//                $('#checkout').val('');
//            }
//
//        },
//        beforeShowDay: function (date)
//        {
//            //console.log(date);
//            if (eventDates[date])
//                return [false, 'unavaiable_date'];
//            else
//                return [true, ''];
//        }
//
//
//    });
//});
