$('.timer-box button.btn.timer-button').click(function () {
    var time = 0;

    if($(this).val() === 'start') {
        time = true;
        $('button.timer-button').html('stop').val('stop');
    }
    else if($(this).val() === 'stop') {
        time = false;
        $('button.timer-button').html('start').val('start');
    }

    while(time) {
        $(this).find('.timer', function () {
            time = getNewTime();
            $(this).html(time);
        });
    }
});



function getNewTime() {
    var active_time = new Date();
    return active_time.getTime() + '....' + active_time.getMinutes() + ':' + active_time.getSeconds() + ':' + active_time.getMilliseconds();
}