<?php
$cek    = $user;
$id_asesor = $cek->id_user;

$nama = $cek->nama_lengkap;
$level = $cek->level;

$tgl = date('m-Y');

date_default_timezone_set('Asia/Jakarta');
$nama = $cek->nama_lengkap;
$email = '';
$level = 'Admin';
$menu = strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));

base_url('');


?>

<head>
    <script src="https://cdn.tiny.cloud/1/er9qpxp3x69rz2zj720k5c7q4xgo4xvwgbt4ulii54g9v406/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .pg-editor-section {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .pg-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .pg-numbers {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .pg-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ddd;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .pg-number.active {
            background-color: #007bff;
            color: #fff;
        }

        .add-pg-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-pg-btn:hover {
            background-color: #218838;
        }

        .pg-content h3 {
            margin-top: 0;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            resize: vertical;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .answers {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .save-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .save-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<div class="main-content">
    <section class="section-act">

        <section class="pg-editor-section">
            <div class="pg-header">
                <div class="pg-numbers">
                    <span class="pg-number active">1</span>
                    <span class="pg-number">2</span>
                    <button class="add-pg-btn">+ Tambah PG</button>
                </div>
            </div>
            <div class="pg-content">
                <h3>Soal PG Nomor: 1</h3>
                <label for="question">Soal</label>
                <textarea id="question" class="rich-text"></textarea>

                <div class="answers">
                    <div class="answer">
                        <label for="answer-a">Jawaban A</label>
                        <textarea id="answer-a" class="rich-text"></textarea>
                    </div>
                    <div class="answer">
                        <label for="answer-b">Jawaban B</label>
                        <textarea id="answer-b" class="rich-text"></textarea>
                    </div>
                    <div class="answer">
                        <label for="answer-c">Jawaban C</label>
                        <textarea id="answer-c" class="rich-text"></textarea>
                    </div>
                    <div class="answer">
                        <label for="answer-d">Jawaban D</label>
                        <textarea id="answer-d" class="rich-text"></textarea>
                    </div>
                </div>

                <label for="correct-answer">Jawaban Benar:</label>
                <select id="correct-answer">
                    <option value="" disabled selected>Pilih Jawaban Benar</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <button class="save-btn">Simpan</button>
            </div>
        </section>

        <script>
            // Initialize TinyMCE for rich-text editing
            tinymce.init({
                selector: '.rich-text',
                height: 150,
                plugins: 'lists link image code',
                toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
            });

            // Handle adding new PG numbers
            const addPgBtn = document.querySelector('.add-pg-btn');
            const pgNumbers = document.querySelector('.pg-numbers');

            addPgBtn.addEventListener('click', () => {
                const newPgNumber = document.createElement('span');
                newPgNumber.classList.add('pg-number');
                newPgNumber.textContent = pgNumbers.children.length;
                pgNumbers.insertBefore(newPgNumber, addPgBtn);
            });

            // Save button functionality (dummy example)
            const saveBtn = document.querySelector('.save-btn');
            saveBtn.addEventListener('click', () => {
                const questionContent = tinymce.get('question').getContent();
                const answers = [
                    tinymce.get('answer-a').getContent(),
                    tinymce.get('answer-b').getContent(),
                    tinymce.get('answer-c').getContent(),
                    tinymce.get('answer-d').getContent(),
                ];
                const correctAnswer = document.getElementById('correct-answer').value;

                console.log('Question:', questionContent);
                console.log('Answers:', answers);
                console.log('Correct Answer:', correctAnswer);
            });
        </script>