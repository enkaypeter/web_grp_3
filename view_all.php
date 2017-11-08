<?php
include('head.php');
?>
    <div id="discos" class="text-center">
        <div class="container"> <!-- Container -->

            <div class="section-title  fadeInDown">
                <h2>TRANSACTION LOGS</h2>
                <hr>
                <div class="clearfix"></div>
                <p>The following distribution companies are available to view payments Made.</p>
               <!--  <center>
                    <ul class="menu">
                        
                    </ul>
                </center> -->
            </div>




            <div class="row">
                <div class="col-md-12" style="">
                    <table class="table table-inverse table-responsive">
                        <thead>
                        <tr>
                            <th>Transaction Ref.</th>
                            <th>Bill Type</th>
                            <th>Disco</th>
                            <th>Account Type</th>
                            <th>Account Number</th>
                            <th>Payer Name</th>
                            <th>Payer Email</th>
                            <th>Payer Phone</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $view = "isset";
                        if(isset($view)){
                            $connect = mysqli_connect("localhost","root","Cecilia2002#","PayOnline");                            
                            $query = ("SELECT * FROM transactions");
                            $sql_res = mysqli_query($connect,$query);
                            $count = mysqli_affected_rows($connect);
                            if($count > 0){
                                while ($row = mysqli_fetch_assoc($sql_res)){
                                    ?>
                                    <tr>
                                        <th scope="row"><?=$row['transaction_ref']?></th>
                                        <td><?=$row['bill_type']?></td>
                                        <td><?=$row['account_type']?></td>
                                        <td><?=$row['account_number']?></td>
                                        <td><?=$row['payer_name']?></td>
                                        <td><?=$row['payer_email']?></td>
                                        <td><?=$row['payer_phone']?></td>
                                        <td>&#8358;<?=$row['amount_paid']?></td>
                                        <td><?=$row['status']?></td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="10"><center>No Record Found</center></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php
include('foot.php');
?>