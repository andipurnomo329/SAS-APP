    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 System
                administrasi sekolah </span>
        </div>
    </footer>

    <!-- plugin:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- end plugin:js -->

    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <!-- end inject -->

    <!-- plugin chart -->
    <script src="{{ asset('js/npm.chart.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- end plugin chart -->
    <!-- plugin datatable -->
    <script src="{{ asset ('vendors/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset ('vendors/datatables/dataTables.js') }}"></script>
    <script src="{{ asset ('vendors/js/data-table.js') }}"></script>
    <!-- end plugin datatable -->

    <!-- datepicker -->
    <script src="{{ asset ('vendors/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('js/modal-demo.js') }}"></script>

    <script>
    $('.date').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });
    </script>
    

    
<script>
    const uploaderInput = document.getElementById('uploaderInput');
    const uploaderList = document.getElementById('uploaderList');
    const dropZone = document.getElementById('dropZone');

    uploaderInput.addEventListener('change', handleFiles);

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });
    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('dragover');
    });
    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        handleFiles({ target: { files: e.dataTransfer.files } });
    });

    function handleFiles(event) {
        if (uploaderList.children.length >= 1) {
            alert("Hanya bisa upload 1 file. Hapus file sebelumnya terlebih dahulu.");
            return;
        }

        const file = event.target.files[0];
        if (!file) return;

        const fileDiv = document.createElement('div');
        fileDiv.className = 'uploader-item';

        fileDiv.innerHTML = `
            <div class="uploader-filename">1). ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)</div>
            <div class="uploader-progress"><div class="uploader-progress-bar">0%</div></div>
            <button class="uploader-remove-icon">&times;</button>
        `;

        const progressBar = fileDiv.querySelector('.uploader-progress-bar');
        const removeIcon = fileDiv.querySelector('.uploader-remove-icon');

        let progress = 0;
        let interval = setInterval(() => {
            if (progress < 100) {
                progress += 5;
                progressBar.style.width = progress + "%";
                progressBar.textContent = progress + "%";
            } else {
                clearInterval(interval);
                progressBar.textContent = "100%";
                setTimeout(() => {
                    progressBar.parentElement.remove();
                    removeIcon.style.display = "block";
                }, 500);
            }
        }, 150);

        // Event tombol X (hapus file)
        removeIcon.addEventListener('click', () => {
            clearInterval(interval);
            fileDiv.remove();
        });

        uploaderList.appendChild(fileDiv);
    }
</script>