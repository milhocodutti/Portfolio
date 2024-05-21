<div class="relojCalendario">
        <!--Se configura primero zona horaria
        <p>theTime</p>-->
        <?php
        date_default_timezone_set("America/argentina/Buenos_Aires");
        echo date("D,d/m/Y G:i");
        ?>
    </div>