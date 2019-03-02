<style>
    html{
        position: relative;
        min-height:100%;
        }
        body{
            margin-bottom: 30px;
        }
    .footer{
        position: absolute;
        bottom:0;
        width:100%;
        background-color: #eaeae1;
        height:30px;
        /* margin-bottom: 0; */
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