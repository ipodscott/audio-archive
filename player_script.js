// Initalize Audio Player
const player = new Plyr('#audio-player');

const tracks = document.querySelectorAll(".track");
const audioPlayer = document.querySelector("#audio-player");
const autoplayToggle = document.querySelector("#autoplay-toggle");
const scrollBtn = document.querySelector(".scroll-btn");

let currentTrack = 0;
let isPlaying = false;
let autoplayEnabled = true;

autoplayToggle.addEventListener("click", () => {
  autoplayEnabled = !autoplayEnabled;
  autoplayToggle.classList.toggle("enabled");
});

tracks.forEach((track, index) => {
  track.addEventListener("click", () => {
    track.classList.add("active");
    scrollBtn.classList.add("show");
    audioPlayer.src = track.dataset.src;
    if (currentTrack !== index) {
      tracks[currentTrack].classList.remove("active");
      currentTrack = index;
      audioPlayer.src = track.dataset.src;
      track.classList.add("active");
      audioPlayer.play();
      isPlaying = true;
    } else {
      if (isPlaying) {
        audioPlayer.pause();
        isPlaying = false;
      } else {
        audioPlayer.play();
        isPlaying = true;
      }
    }
  });
});

audioPlayer.addEventListener("ended", () => {
  if (autoplayEnabled) {
    tracks[currentTrack].classList.remove("active");
    currentTrack = (currentTrack + 1) % tracks.length;
    audioPlayer.src = tracks[currentTrack].dataset.src;
    tracks[currentTrack].classList.add("active");
    audioPlayer.play();
    isPlaying = true;
  }
});

audioPlayer.addEventListener("play", () => {
  tracks.forEach((track) => {
    if (track !== tracks[currentTrack]) {
      track.classList.remove("active");
    }
  });
});

document.getElementById("scrollButton").addEventListener("click", function() {
    const activeTrack = document.querySelector(".track.active");
    if (activeTrack) {
        activeTrack.scrollIntoView({ behavior: "smooth" }); // You can also use "auto" for instant scrolling
    }
});
