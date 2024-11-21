<?php
date_default_timezone_set('Asia/Jakarta');
$cek    = $user;
$nama   = $cek->nama_lengkap;
$email  = '';
$level  = 'Calon Asesi';
$menu     = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<head>
    <style>
        .upload-container {
            margin-top: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: none;
        }

        .info {
            color: red;
            font-size: 12px;
        }

        .btn-submit {
            background-color: #3a57e8;

            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-submit:hover {
            background-color: #008ecf;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            cursor: pointer;
        }

        select:focus {
            border-color: #00b0ff;
            outline: none;
        }
    </style>
</head>
<div class="main-content">
    <section class="section-act">
        <main class="main">
            <div class="welcome-container">
                <h1>Hello, <?php echo ucwords($nama); ?>!</h1>
                <p>Ini Adalah Laman Upload Bukti</p>
                <div class="welcome-tab">
                    <span>
                        <h3 class="flex" style="gap:3px">Home<i class="bx bx-chevrons-right" style="cursor:text"></i> Upload Bukti</h3>
                    </span>

                    <div class="button">
                        <a href="<?php echo base_url(uri: 'panel_siswa/'); ?>"> Back </a>
                    </div>
                </div>
            </div>
        </main>

        <div class="upload-container">
            <h2>Upload</h2>
            <form id="uploadForm">
                <div class="form-group">
                    <label for="jenisDokumen">Jenis Dokumen</label>
                    <select id="jenisDokumen" name="jenisDokumen" required>
                        <option value="" disabled selected>Pilih Jenis Dokumen</option>
                        <option value="raport">Raport</option>
                        <option value="foto">Foto</option>
                        <option value="ktp_kk">KTP/KK</option>
                        <option value="bukti_kompetensi">Bukti Kompetensi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namaDokumen">Nama Dokumen</label>
                    <input type="text" id="namaDokumen" name="namaDokumen" placeholder="Nama Dokumen" required>
                </div>
                <div class="form-group">
                    <label for="fileDokumen">File</label>
                    <input type="file" id="fileDokumen" name="fileDokumen" required>
                    <small class="info">Maksimum Upload 20 MB</small>
                </div>
                <div class="form-group">
                    <label for="deskripsiDokumen">Deskripsi Dokumen</label>
                    <textarea id="deskripsiDokumen" name="deskripsiDokumen" rows="3" placeholder="Deskripsi Dokumen"></textarea>
                </div>
                <button type="submit" class="btn-submit">Upload Dokumen</button>
            </form>
        </div>

        <script>
            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                const jenisDokumen = document.getElementById('jenisDokumen').value;
                const namaDokumen = document.getElementById('namaDokumen').value;
                const fileDokumen = document.getElementById('fileDokumen').files[0];
                const deskripsiDokumen = document.getElementById('deskripsiDokumen').value;

                // Check if a valid option is selected for jenisDokumen
                if (!jenisDokumen) {
                    alert('Silakan pilih jenis dokumen.');
                    return;
                }

                // Validate file size (max 20 MB)
                if (fileDokumen.size > 20 * 1024 * 1024) {
                    alert('Ukuran file tidak boleh lebih dari 20 MB');
                    return;
                }

                // Example of handling the form data
                const formData = new FormData();
                formData.append('jenisDokumen', jenisDokumen);
                formData.append('namaDokumen', namaDokumen);
                formData.append('fileDokumen', fileDokumen);
                formData.append('deskripsiDokumen', deskripsiDokumen);

                console.log('Form data submitted:', formData);

                // Optionally, send the data to a server using fetch
                // fetch('your-upload-endpoint', { method: 'POST', body: formData })
                //   .then(response => response.json())
                //   .then(data => console.log(data))
                //   .catch(error => console.error(error));

                alert('Dokumen berhasil diupload!');
            });
        </script>