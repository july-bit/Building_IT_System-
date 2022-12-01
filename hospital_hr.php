<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css for main -->
    <link rel="stylesheet" href="assets/css/design.css">
    <!-- css for header and footer -->
    <link rel="stylesheet" href="assets/css/headernfooter.css">
    <!-- css for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Staff Database</title>
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
            <input type="checkbox" hidden id="edit_check">
            <label class="overlay" for="edit_check"></label>
            <!-- <div class="edit_form"> -->
                <form action="" method="" id="general_info__edit_form" class="pop_up_form">
                    <div class="form_header">Edit form</div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels  labels_edit" for="hospital_name">Hospital name:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs" type="text" id="hospital_name" name="hospital_name">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels  labels_edit" for="hospital_phone">Phome number:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs" type="phone" id="hospital_phone" name="hospital_phone">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit"  for="hospital_email">Hospital email:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs" type="email" id="hospital_email" name="hospital_email">
                        <!-- </div> -->
                    </div>
                    <div class="fields">
                        <!-- <div class="labels"> -->
                            <label class="labels labels_edit" for="hospital_address">Hospital addess:</label>
                        <!-- </div> -->
                        <!-- <div class="inputs"> -->
                            <input class="inputs" type="text" id="hospital_address" name="hospital_address">
                        <!-- </div> -->
                    </div>
                    <br>
                    <label class="close_button" for="edit_check"><i class="fa-solid fa-xmark"></i></label>
                    <input type="submit" value="Change" class="submit_button">
                </form>
            <!-- </div> -->
        </div>

        <div class="info_section" id="staff_info">
            <input type="checkbox" hidden  id="add_shipper_button_check">
            <label class="overlay" id="overlay1" for="add_shipper_button_check"></label>
            <form action="" method="" id="add_shipper_form" class="pop_up_form">
                <div class="form_header">Add Delivery Man</div>
                <div class="fields">
                    <label class="labels" for="shipper_name">Name:</label>
                    <input class="inputs" type="text" id="shipper_name" name="shipper_name">
                </div>
                <div class="fields">
                    <label class="labels" for="shipper_phone">Phone:</label>
                    <input class="inputs" type="tel" id="shipper_phone" name="shipper_phone">
                </div>
                <div class="fields">
                    <label class="labels" for="shipper_email">Email:</label>
                    <textarea class="inputs" name="shipper_email" id="shipper_email"></textarea>
                </div>
                <br>
                <label class="close_button" for="add_shipper_button_check"><i class="fa-solid fa-xmark"></i></label>
                <input type="submit" value="Add" class="submit_button">
            </form>

            <input type="checkbox" hidden  id="add_staff_button_check">
            <label class="overlay" id="overlay2" for="add_staff_button_check"></label>
            <form action="" method="" id="add_staff_form" class="pop_up_form">
                <div class="form_header">Add Employee</div>
                <div class="fields">
                    <label class="labels" for="staff_name">Name:</label>
                    <input class="inputs" type="text" id="staff_name" name="staff_name">
                </div>
                <div class="fields">
                    <label class="labels" for="staff_phone">Phone:</label>
                    <input class="inputs" type="tel" id="staff_phone" name="staff_phone">
                </div>
                <div class="fields">
                    <label class="labels" for="staff_email">Email:</label>
                    <textarea class="inputs" name="staff_email" id="staff_email"></textarea>
                </div>
                <br>
                <label class="close_button" for="add_staff_button_check"><i class="fa-solid fa-xmark"></i></label>
                <input type="submit" value="Add" class="submit_button">
            </form>

            <section class="info_section__nav" id="staff_info__nav">
                <div class="nav_items_left">
                    <a href="" class="nav_items nav_staff">All</a>
                    <a href="" class="nav_items nav_staff">Staff</a>
                    <a href="" class="nav_items nav_staff">Delivery Man</a>
                </div>
                <div class="nav_items_right">
                    <label class="nav_items open_form_button" id="add_staff_button" for="add_staff_button_check">ADD STAFF</label>
                    <label class="nav_items open_form_button" id="add_shipper_button" for="add_shipper_button_check">ADD DELIVERY MAN</label>
                </div>
            </section> 
            <br><br><br><hr><br>
            <section class="blood_info__details" id="staff_info__details">
                <table class="details_table" id="staff_table">
                    <thead>
                        <tr>
                            <th class="mobile_hide">N.o</th>
                            <th>Full name</th> 
                            <th>Address</th>
                            <th>Salary</th>
                            <th>Created at</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mobile_hide">1</td>
                            <td>Nguyen Van A</td> 
                            <td>10, Hai Ba Tung, HCM</td>
                            <td>20.000</td>
                            <td>May, 10th, 2021</td>
                        </tr>
                        <tr>
                            <td class="mobile_hide">1</td>
                            <td>Nguyen Van A</td> 
                            <td>10, Hai Ba Tung, HCM</td>
                            <td>20.000</td>
                            <td>May, 10th, 2021</td>
                        </tr>
                        <tr>
                            <td class="mobile_hide">1</td>
                            <td>Nguyen Van A</td> 
                            <td>10, Hai Ba Tung, HCM</td>
                            <td>20.000</td>
                            <td>May, 10th, 2021</td>
                        </tr>
                        <tr>
                            <td class="mobile_hide">1</td>
                            <td>Nguyen Van A</td> 
                            <td>10, Hai Ba Tung, HCM</td>
                            <td>20.000</td>
                            <td>May, 10th, 2021</td>
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
</body>
</html>