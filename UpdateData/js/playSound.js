function play_sound() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute("id", "audioId");
        audioElement.setAttribute('src', 'sound/icq.wav');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.play();
} 
