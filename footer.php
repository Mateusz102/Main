<style>
    html{
        position: relative;
        min-height:100%;
        }
        body{
            margin-bottom: 35px;
        }
    .footer{
        position: absolute;
        bottom:0; /* dystans pomiędzy fotterem oraz doałem strony jest 0  jesli nie to albo margin <> heigh albo czcionkaza duza*/
        width:100%;
        background-color: #eaeae1;
        height:35px;
        font-size: 1 px;
        text-align: center;
        padding-top: 2px;*/
        }
</style>
<footer class="footer">
    <div class="container">
         <p class="text-muted">
            <?php 
            $today=date("Y");
            echo "Copyright &copy; 2018-$today Mat"
            ?>
        </p>
    </div>
</footer>