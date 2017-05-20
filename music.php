<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    hello
    <title>Favorite music</title>
    <style>
        h2{
            text-align: center;
        }
        div{
            text-align: left;
        }
    </style>
</head>
<body>
<h2>Favorite</h2>
<form method="post" action="aboutmusic.php">
    <div class="song">
        <label for="songName">Song Name</label>
        <input name="songName" id="songName" autocomplete="songName">
    </div>
    <div class="song">
        <label for="singerName">Singer Name</label>
        <input name="singerName" id="singerName" autocomplete="SingerName">
    </div>
    <div class="song">
        <label for="writerName">Writer Name</label>
        <input name="writerName" id="writerName" autocomplete="WriterName">
    </div>
    <div class="song">
        <label for="songType">Song Type</label>
        <input name="songType" id="songType" autocomplete="songType">
    </div>
    <button>Submit</button>
</form>
</body>
</html>
