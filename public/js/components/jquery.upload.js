const uploaderInput = document.getElementById('uploaderInput');
const uploaderList = document.getElementById('uploaderList');
const dropZone = document.getElementById('dropZone');

// Event listener
uploaderInput.addEventListener('change', handleFiles);
['dragover', 'dragleave', 'drop'].forEach(evt => {
    dropZone.addEventListener(evt, e => {
        e.preventDefault();
        dropZone.classList.toggle('dragover', evt === 'dragover');
        if (evt === 'drop') handleFiles({ target: { files: e.dataTransfer.files } });
    });
});

function handleFiles(e) {
    if (uploaderList.children.length) return alert("Hanya bisa upload 1 file. Hapus file sebelumnya terlebih dahulu.");

    const file = e.target.files[0];
    if (!file) return;

    const fileDiv = document.createElement('div');
    fileDiv.className = 'uploader-item';
    fileDiv.innerHTML = `
        <div class="uploader-filename">1). ${file.name} (${(file.size/1048576).toFixed(2)} MB)</div>
        <div class="uploader-progress"><div class="uploader-progress-bar">0%</div></div>
        <button class="uploader-remove-icon" style="display:none;">&times;</button>
    `;

    const progressBar = fileDiv.querySelector('.uploader-progress-bar');
    const removeIcon = fileDiv.querySelector('.uploader-remove-icon');
    uploaderList.appendChild(fileDiv);

    let progress = 0;
    const interval = setInterval(() => {
        progress = Math.min(progress + 5, 100);
        progressBar.style.width = progress + "%";
        progressBar.textContent = progress + "%";
        if (progress === 100) {
            clearInterval(interval);
            setTimeout(() => {
                progressBar.parentElement.remove();
                removeIcon.style.display = "inline-block";
            }, 400);
        }
    }, 150);

    removeIcon.onclick = () => (clearInterval(interval), fileDiv.remove());
}
