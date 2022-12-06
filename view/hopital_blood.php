<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css for main -->
    <link rel="stylesheet" href="../assets/css/hospital.css">
    <!-- css for header and footer -->
    <link rel="stylesheet" href="../assets/css/headernfooter.css">
    <!-- css for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blood Database</title>
</head>
<body>
    <div id="header">
        <?php 
            require ('header.html');
        ?>
    </div>

    <main>
        <div class="general_info">
            <div class="general_info__hospital">
                <label for="edit_check" class="general_info__edit_button"><i class="fa-regular fa-pen-to-square"></i></label>
                <section class="general_info__hospital_name">
                    Hospital Name
                </section>
                <section class="general_info__hospital_details">
                    <p class="hospital_details"> <i class="fa-solid fa-phone"></i>&nbsp &nbsp 0909090909</p>
                    <p class="hospital_details"><i class="fa-solid fa-envelope"></i> &nbsp &nbspabc@gmail.com</p>
                    <p class="hospital_details"><i class="fa-solid fa-location-dot"></i> &nbsp &nbsp123 ACBV Go Vap, HCM</p>
                </section>
            </div>
    
            <div class="general_info__blood">
                <div class="general_info__blood__1">
                    <div class="blood_group" id="blood_a">
                        <section class="blood_name">
                            Blood A
                        </section>
                        <section class="blood_quantity">
                            000
                        </section>
                    </div>
                    <div class="blood_group" id="blood_b">
                        <section class="blood_name">
                            Blood B
                        </section>
                        <section class="blood_quantity">
                            000
                        </section>
                    </div>
                </div>
                <div class="general_info__blood__2">
                    <div class="blood_group" id="blood_o">
                        <section class="blood_name">
                            Blood O
                        </section>
                        <section class="blood_quantity">
                            000
                        </section>
                    </div>
                    <div class="blood_group" id="blood_ab">
                        <section class="blood_name">
                            Blood AB
                        </section>
                        <section class="blood_quantity">
                            000
                        </section>
                    </div>
                </div>
            </div>
            <!-- <div class="edit_form"> -->
                <input type="checkbox" hidden id="edit_check">
                <label class="overlay" for="edit_check"></label>
                <form action="" method=""  class="pop_up_form" id="general_info__edit_form">
                    <div class="form_header">Edit form</div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit" for="hospital_name">Hospital name:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs inputs_edit" type="text" id="hospital_name" name="hospital_name">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit" for="hospital_phone">Phome number:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs inputs_edit" type="phone" id="hospital_phone" name="hospital_phone">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit" for="hospital_email">Hospital email:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs" inputs_edit type="email" id="hospital_email" name="hospital_email">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit" for="hospital_address">Hospital addess:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs inputs_edit" type="text" id="hospital_address" name="hospital_address">
                        <!-- </div> -->
                    </div>
                    <br>
                    <label class="close_button" for="edit_check"><i class="fa-solid fa-xmark"></i></label>
                    <input type="submit" value="Change" class="submit_button">
                </form>
            <!-- </div> -->
        </div>
    
        <div class="info_section" id="blood_info">
            <input type="checkbox" hidden id="request_button_check">
            <label class="overlay" for="request_button_check"></label>
            <form action="" method="" id="request_form" class="pop_up_form">
                <div class="form_header">Request form</div>
                <div class="fields">
                    <!-- <div class="labels"> -->
                        <label class="labels blood_group_label" for="blood_group">Blood group:</label>
                    <!-- </div> -->
                    <!-- <div class="inputs"> -->
                        <select class="inputs" id="blood_group" name="blood_group">
                            <option value="none">Select blood group</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="o">O</option>
                            <option value="ab">AB</option>
                        </select>
                    <!-- </div> -->
                </div>
                <div class="fields">
                    <!-- <div class="labels"> -->
                        <label class="labels" for="blood_quantity">Quantity:</label>
                    <!-- </div> -->
                    <!-- <div class="inputs"> -->
                        <input class="inputs" type="number" id="blood_quantity" name="blood_quantity" placeholder="(units)">
                    <!-- </div> -->
                </div>
                <div class="fields">
                    <!-- <div class="labels"> -->
                        <label class="labels" for="severity">Severity:</label>
                    <!-- </div> -->
                    <!-- <div class="inputs"> -->
                        <input class="inputs" type="text" id="hospital_address" name="hospital_address">
                    <!-- </div> -->
                </div>
                <div class="fields">
                    <!-- <div class="labels"> -->
                        <label class="labels" for="request_message">Message:</label>
                    <!-- </div> -->
                    <!-- <div class="inputs"> -->
                        <textarea class="inputs request_message" name="request_message" id="request_message" cols="25" rows="10"></textarea>
                    <!-- </div> -->
                </div>
                <br>
                <label class="close_button" for="request_button_check"><i class="fa-solid fa-xmark"></i></label>
                <input type="submit" value="Request" class="submit_button">
            </form>
            <section class="info_section__nav" id="blood_info__nav">
                <a href="" class="nav_items nav_blood">Blood A</a>
                <a href="" class="nav_items nav_blood">Blood B</a>
                <a href="" class="nav_items nav_blood">Blood O</a>
                <a href="" class="nav_items nav_blood">Blood AB</a>
                <label class="nav_items open_form_button" id="request_button" for="request_button_check">REQUEST</label>
            </section> 
            <br><br><br><hr><br>
            <section class="info_section__details" id="blood_info__details">
                <table class="details_table" id="blood_table">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Blood group</th> 
                            <th>Quantity</th>
                            <th>Storage</th>
                            <th>Donator ID</th> 
                            <th>Donator name</th>
                            <th>Expiry date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>   
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                        <tr class="data_rows">
                            <td>1</td>
                            <td>A</td> 
                            <td>10</td>
                            <td>01.04.06</td>
                            <td>12345678</td> 
                            <td>Nguyen Van A</td>
                            <td>May, 10th 2021</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>   
                            <td id="button_row" colspan="8"><button class="load_more_button">Load more</button></td>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>

    <div id="footer">
        <?php 
            require ('footer.html');
        ?>
    </div>

    <!-- link js -->
    <script src="../assets/js/load_more.js"></script>
</body>
</html>