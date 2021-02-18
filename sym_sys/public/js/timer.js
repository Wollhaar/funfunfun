$(document).ready(function () {

});

var intervalTimer;

function setTime() {
    var time = $('.timer').html();
    time = time.split(':');

    return (60 * time[0]) + time[1];
}

function getNewTime() {
    var active_time = setTime();
    var timer = $('.timer');
    var title = $('title').html();

    active_time++;
    if (active_time < 60) {
        $(timer).html('00:' + active_time);
        $('title').html('00:' + active_time + ' | ' + title);
    }
    else {
        var minutes = parseInt(active_time / 60);
        $(timer).html(minutes + ':' + active_time - minutes * 60);
        $('title').html(minutes + ':' + active_time - minutes * 60 + ' | ' + title);
    }
}

$('.timer-box button.btn.timer-button').click(function () {
    if ($(this).val() === 'start') {
        $(this).html('stop').val('stop');
        intervalTimer = setInterval(getNewTime(), 1000);
    }
    else if ($(this).val() === 'stop') {
        $(this).html('start').val('start');
        $('.timer-box').find('button.save-time--button').attr('class', 'btn save-time--button').html('Save time').val('save');
        clearInterval(intervalTimer);
    }
});
