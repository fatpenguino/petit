
<?php
$query=$connection->query("select * from petitions where status=1 ");
$query1=$connection->query("select * from users");
$nou=0;
while ($u=$query1->fetch_object()){
    $nou++;
}
?>

<div class="container" style="margin-top:20px; " >
            <?php
            while($row=$query->fetch_object()){
                ?>
                <div class="petition col-md-12">


                    <h3 style="margin-left: 15px;">
                        <?php echo $row->title; ?>
                    </h3>

                    <div class="col-md-8">

                        <p style="text-align: center">
                            by <a href="index.php">
                                <?php
                                $query1=$connection->query("select * from users where id=".$row->user_id."");
                                if ($row1=$query1->fetch_object())
                                    echo $row1->name;
                                echo " ";
                                echo $row1->surname;
                                ?></a>
                        </p>
                        <img  src="<?php echo $row->img; ?>" width="600px" height="400px" style="margin-bottom:10px;">

                        <p class="exceont-size: 15px;rpt"><?php echo $row->content; ?></p>

                       <h2 style="font-size: 25px;">Участники</h2>
                        <h3 style="color: #737273;font-size: 15px; margin-bottom: -10px;">ПОПУЛЯРНЫЕ КОММЕНТАРИИ</h3>
                        <hr style="border-top:1px solid #777">

                        <?php
                        $querycomment=$connection->query("select * from one_time_sign where petition_id=".$row->id." ");
                        $querycomment2=$connection->query("select * from sign where petition_id=".$row->id." ");

                        while($rowforcomment2=$querycomment2->fetch_object())
                        {
                            $queryforuser=$connection->query("select * from users where id=".$rowforcomment2->user_id."  ");
                                if($rowforuser=$queryforuser->fetch_object()){


                            ?>

                            <div class="comment">

                                <p><?php echo $rowforcomment2->comment;?></p>
                                <h5>  <?php echo $rowforuser->surname." ".$rowforuser->name; ?></h5>
                                <hr style="border-top:1px solid #777">

                            </div>


                        <?php }
                                }

                        while($rowforcomment=$querycomment->fetch_object())
                            {
                        ?>

                        <div class="comment">

                                <p><?php echo $rowforcomment->comment;?></p>
                                 <h5>  <?php echo $rowforcomment->surname." ".$rowforcomment->name; ?></h5>
                            <hr style="border-top:1px solid #777">

                        </div>


                        <?php } ?>

                    </div>
                    <div class="col-md-4 side" >
                        <?php
                        $query2=$connection->query("select count(*) amnt from sign where petition_id=".$row->id."");
                        $query4=$connection->query("select count(*) amnt from one_time_sign where petition_id=".$row->id." and activation=1");
                        $total=$row->amount;

                        $first=0;
                        if($row2=$query2->fetch_object())
                        {
                            $first+=$row2->amnt;
                        }
                        if($row4=$query4->fetch_object())
                        {
                            $first+=$row4->amnt;
                        } ?>
                            <img src="img/victory.png" width="40px" height="30px"><h1>Подтвержденная</h1> <h1 style="margin-top: -5px;">победа</h1>
                            <div style="margin-bottom: 20px;">
                                <h4 class="signed">Это петиция выиграла с <?php echo $first;?> подписчиком!</h4>
                             <ul class="list-group social-share2">
                                 <li>
                                <script type="text/javascript">
                                    document.write(VK.Share.button({
                                        url: 'http://balloonhouse.kz/?page=wins',
                                        title: '<?php echo $row->title;?>',
                                        description: '<?php echo $row->content;?>',
                                        image: '<?php echo $row->img; ?>',
                                    }   ,{
                                        type: 'custom', text: '<img src="http://oktravel.se/wp-content/themes/wp/img/soc/vkontakte.png" width="24px" height="24px;"/>Опубликовать в VK'
                                    }));
                                </script>
                                 </li>
                                 <li><a href=""><img src="https://www.facebookbrand.com/img/fb-art.jpg" width="24px" height="24px"> Опубликовать в Facebook</a>
                                </ul>
                    </div>

                </div>

                </div>

            <?php } ?>




</div>