<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 01 Element JQuery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./jquery-2.2.3.min.js"></script>
    <style>
        .div-form {
            padding: 5px;
        }
        .div-form > label {
            display: block;
        }
    </style>
</head>
<body>
<h1 id="h1-judul">Judul</h1>
<div id="div-content">
    <p class="p-paragraf">
        JQuery adalah framework javascript.
    </p>
    <p class="p-paragraf">
        JQuery bertujuan untuk mempermudah pembuatan javascript.
    </p>
    <p class="p-paragraf">
        JQuery memiliki banyak fungsi untuk memanipulasi html
    </p>
    <p class="p-paragraf">
        JQuery bisa merubah Id dari suatu elemen
    </p>
    <p class="p-paragraf">
        JQuery mempermudah untuk penambahan atau pengurangan elemen
    </p>
    <p class="p-paragraf">
        JQuery mempunyai fungsi ajax yang digunakan untuk mengambil data json dari link tertentu.
    </p>
</div>
<div id="div-gambar">
    <img id="img-logo" src="./gambar/logo1.png" alt="Logo JQuery">
</div>
<div id="div-form">
    <fieldset>
        <legend>Contoh Form</legend>

        <div class="div-form">
            <label for="input-text">Input Text : </label>
            <input id="input-text" type="text">
        </div>

        <div class="div-form">
            <label for="input-textarea">Text Area Input</label>
            <textarea id="input-textarea" name="textarea-name"  cols="30" rows="10"></textarea>
        </div>

        <div class="div-form">
            <label for="input-select">Select Input</label>
            <select id="input-select">
                <option value="Opsi 1"> Opsi 1</option>
                <option value="Opsi 2"> Opsi 1</option>
                <option value="Opsi 3"> Opsi 1</option>
            </select>
        </div>

        <div class="div-form">
            <label>Input Radio</label>
            <label for="radio-1">
                <input id="radio-1" type="radio" name="input_radio" value="1"> Radio 1
            </label>
            <label for="radio-2">
                <input id="radio-2" type="radio" name="input_radio" value="2"> Radio 2
            </label>
        </div>

        <div class="div-form">
            <label>Input Checkbox</label>
            <label for="checkbox-1">
                <input id="checkbox-1" type="checkbox" name="checkbox[]" value="1"> Checkbox 1
            </label>
            <label for="checkbox-2">
                <input id="checkbox-2" type="checkbox" name="checkbox[]" value="2"> Checkbox 2
            </label>
        </div>


    </fieldset>
</div>
<script>
    $(window).load(function(){
        console.log('Panggil Load');
    });

    $(document).ready(function(){
        console.log('Panggil Ready 2');
    });

    $(document).ready(function(){
        console.log('Panggil Ready 1');
    });
</script>
</body>
</html>