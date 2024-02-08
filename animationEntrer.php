<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avancement du Scroll</title>
    <link rel="stylesheet" href="styleAnimationEntrer.css">
</head>
<body>
    <div style="height:3500px; width: 100%;">
        <img src="img/0.png" alt="" class="cube" id="imageAnimer">
        <span class="textAnimationEntrer">Bienvenue c'est RESOLOGY</span>
    </div>

        
    <script>
        const imageAnimer = document.getElementById('imageAnimer');
        function changeImage(indexImage) {
            if (indexImage <= 300) {
                 imageAnimer.src = 'img/' + indexImage + '.png';
            }
        }

        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY / 10;
            var roundedScrollPosition = Math.round(scrollPosition );
            changeImage(roundedScrollPosition);
        });
    </script>
</body>
</html>













<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resology</title>
    <link rel="stylesheet" href="styleAnimationEntrer.css">
</head>
<body>



<section class="SectionAnimationEntrer">
    <div class="cube"></div>
    <h1 class="textAnimationEntrer">Bonjour</h1>
    <h2 class="textAnimationEntrer">Bonjour</h2>
    <h3 class="textAnimationEntrer">Bonjour</h3>
    <h4 class="textAnimationEntrer">Bonjour</h4>
</section>
    
</body>
</html> -->