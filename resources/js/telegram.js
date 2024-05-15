function kirimPesan() {
    var nama = document.getElementById('judul').value;
    var email = document.getElementById('isi_berita').value;
    // var pesan = document.getElementById('thumbnail').value;
    var token = '6750609219:AAFbaG0pzoOYqfjMsx_t8jpswm5DlgYrln4'; // TELEGRAM TOKEN
    var grup = '-1002122684774'; // CHAT ID

    // Get the file input element
    var fileInput = document.getElementById('fileInput');
    var file = fileInput.files[0];

    // Create FormData object to send both text and image
    var formData = new FormData();
    formData.append('chat_id', grup);
    formData.append('caption', `${nama}\n${email}`);
    formData.append('photo', file);

    // Create XMLHttpRequest to send the data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', `https://api.telegram.org/bot${token}/sendPhoto`, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Message sent successfully.');
            } else {
                console.error('Error sending message:', xhr.status);
            }
        }
    };
    xhr.send(formData);
}
