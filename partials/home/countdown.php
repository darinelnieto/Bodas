 <?php
/**
 * 
 * Partial Name: countdown
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$background = get_field('countdown_background');
$date = get_field('count_down');
$images = get_field('content_after_count_down');
$photo = $images['photo'];
?>
<section class="countdown-partial-3dfca8">
    <input type="hidden" class="date-init" value="<?= $date; ?>">
    <div id="counntdown"></div>
</section>
<section class="content-after-count-down">
    <?php if(!empty($images['left_image'])): $left_img = $images['left_image'];  ?>
        <img src="<?= $left_img['url']; ?>" alt="<?= $left_img['title']; ?>" width="<?= $left_img['width']; ?>" height="<?= $left_img['height']; ?>" class="img-left">
    <?php endif; ?>
    <div class="center-image">
        <?php if(!empty($photo)): ?>
            <img src="<?= $photo['url']; ?>" alt="<?= $photo['title']; ?>" width="<?= $photo['width']; ?>" height="<?= $photo['height']; ?>" class="photo">
        <?php endif; if(!empty($images['logo'])): $logo = $images['logo']; ?>
            <img src="<?= $logo['url']; ?>" alt="<?= $logo['title']; ?>" width="<?= $logo['width']; ?>" height="<?= $logo['height']; ?>" class="logo">
        <?php endif; ?>
    </div>
    <?php if(!empty($images['right_top_image'])): $right_img = $images['right_top_image']; ?>
        <img src="<?= $right_img['url']; ?>" alt="<?= $right_img['title']; ?>" width="<?= $right_img['width']; ?>" height="<?= $right_img['height']; ?>" class="right-img">
    <?php endif; ?>
</section>
<script>
    var date_end = $('.date-init').val().trim();

    // Diccionario de meses en español a inglés
    var monthMap = {
        "Ene": "Jan", "Feb": "Feb", "Mar": "Mar", "Abr": "Apr", "May": "May", "Jun": "Jun",
        "Jul": "Jul", "Ago": "Aug", "Sep": "Sep", "Oct": "Oct", "Nov": "Nov", "Dic": "Dec"
    };

    // Extraer el mes en español y reemplazarlo
    var monthRegex = /^(...)\s(\d{1,2}),\s(\d{4})\s(\d{2}):(\d{2}):(\d{2})$/;
    var match = date_end.match(monthRegex);

    if (match) {
        var mesEnEspañol = match[1]; // "Dic"
        var dia = match[2];
        var año = match[3];
        var hora = match[4];
        var minutos = match[5];
        var segundos = match[6];

        if (monthMap[mesEnEspañol]) {
            var mesEnIngles = monthMap[mesEnEspañol];
            date_end = `${mesEnIngles} ${dia}, ${año} ${hora}:${minutos}:${segundos}`;
        }
    }

    var countDownDate = new Date(date_end).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    if(days <= 9){
        days = '0' + Math.floor(distance / (1000 * 60 * 60 * 24));
    }
    if(hours <= 9){
        hours = '0' + Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    }
    if(minutes <= 9){
        minutes = '0' + Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    }
    if(seconds <= 9){
        seconds = '0' + Math.floor((distance % (1000 * 60)) / 1000);
    }
    <?php if(get_bloginfo("language") == "en-US"): ?>
        document.getElementById("counntdown").innerHTML = "<div class='item-count'><span>" + days + "</span><br><span>Days</span></div><div class='item-count'><span class'date'>" + hours + "</span><br><span class='h-m'>Hours</span></div><div class='item-count'><span class'date'>" + minutes + "</span><br><span class='h-m'>Minutes</span></div><div class='item-count'><span class'date'>" + seconds + "</span><br><span class='h-m'>Seconds</span></div>";
    <?php else: ?>
        document.getElementById("counntdown").innerHTML = "<div class='item-count'><span>" + days + "</span><br><span>Días</span></div><div class='item-count'><span class'date'>" + hours + "</span><br><span class='h-m'>Horas</span></div><div class='item-count'><span class'date'>" + minutes + "</span><br><span class='h-m'>Minutos</span></div><div class='item-count'><span class'date'>" + seconds + "</span><br><span class='h-m'>Segundos</span></div>";
    <?php endif; ?>

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("counntdown").innerHTML = "Hemos comenzado";
    }
    }, 1000);
</script>  