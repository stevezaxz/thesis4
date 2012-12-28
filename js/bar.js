var progress = setInterval(function() {
    var $bar = $('.bar');
    
    if ($bar.width()==700) {
        clearInterval(progress);
        $('.progress').removeClass('active');
    } else {
        $bar.width($bar.width()+70);
    }
   // $bar.text($bar.width()/10 + "%");
}, 500);
