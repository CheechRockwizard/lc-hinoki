function play(id) {
    var audio = document.getElementById('audio'+id);
    if (audio.paused) {
        audio.play();
        $('#play'+id).removeClass('icon-play-circle')
        $('#play'+id).addClass('icon-pause-circle')
    }else{
        audio.pause();
        audio.currentTime = 0
        $('#play'+id).addClass('icon-play-circle')
        $('#play'+id).removeClass('icon-pause-circle')
    }
}