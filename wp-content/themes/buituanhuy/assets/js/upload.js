function start_record(obj){
    //tạo record mới
    var button = obj;
    var id = jQuery(obj).attr('did');
    startRecording(button, id);

}

function stop_record(obj){
    //dừng record hiện có
    var button = obj;
    var id = jQuery(obj).attr('did');
    stopRecording(button, id);
}

let mediaRecorder;
let audioChunks = [];

async function startRecording(button, index) {
  const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
  mediaRecorder = new MediaRecorder(stream);
  audioChunks = [];

  mediaRecorder.ondataavailable = event => {
    audioChunks.push(event.data);
  };

  mediaRecorder.onstop = () => {
    const audioBlob = new Blob(audioChunks, { type: 'audio/mp3' });
    uploadRecording(audioBlob, index);
  };

  mediaRecorder.start();
  button.disabled = true;
  button.nextElementSibling.disabled = false; 
}

function stopRecording(button, index) {
  mediaRecorder.stop();
  button.disabled = true;
  button.previousElementSibling.disabled = false;
}

async function uploadRecording(audioBlob) {
  const formData = new FormData();
  const uniqueFileName = `recording_${Date.now()}.mp3`; 
  formData.append("audio", audioBlob, uniqueFileName);

  try {
    const response = await fetch(`${ajax_object.ajax_url}?action=upload_audio`, {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      const result = await response.json();
      if (result.success) {
        console.log(`gửi cho TH thành công rồi!`);
        alert(result.data.message);
        location.reload();

      } else {
        console.error(`gửi cho TH thất bại`);
        alert(result.data.message);
      }
    } else {
      console.error(`gửi cho TH thất bại`);
      alert('Upload thất bại');
    }
  } catch (error) {
    console.error("Gặp phải lỗi rồi:", error);
    alert('Upload gặp lỗi');
  }
}

function initializeWaveforms() {
    const container = document.getElementById('audio-container');
    const audioFiles = JSON.parse(container.getAttribute('data-audio-files'));
    const directory = container.getAttribute('data-directory');

    // Kiểm tra xem có lấy được danh sách file âm thanh không
    if (audioFiles && audioFiles.length > 0) {
        audioFiles.forEach((audio, index) => {
            const containerId = `#waveform${index}`;
            createWaveform(containerId, `${directory}${audio}`);
        });
    } else {
        console.error("Không tìm thấy file âm thanh nào.");
    }
}

document.addEventListener('DOMContentLoaded', initializeWaveforms);

const waveSurfers = [];

function createWaveform(containerId, audioUrl) {
    const waveSurfer = WaveSurfer.create({
        container: containerId,
        waveColor: 'green',
        progressColor: 'red',
        responsive: true,
        height: 100,
        barWidth: 2
    });
    waveSurfer.load(audioUrl);
    waveSurfers.push(waveSurfer);
    return waveSurfer;
}

function togglePlay(index) {
    if (waveSurfers[index].isPlaying()) {
        waveSurfers[index].pause();
    } else {
        waveSurfers[index].play();
    }
}
