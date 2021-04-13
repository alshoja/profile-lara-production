<?php 

$product = array("product-1" => "P1", "Product 2" => "P2", "Product 3" => "P3");
$manufacture_type = array("Manufacture 1" => "M1", "Manufacture 2" => "M2", "Manufacture 3" => "M3");
$ship_type = array("Type 1" => "S1", "Type 2" => "S2", "Type 3" => "S3");

?>

<style>
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .ul {
        /* background-color: #eee; */
        cursor: pointer;
        background-color: #fff;
        padding: 10px;

    }

    .li {
        padding: 12px;
    }

    span.select2-selection.select2-selection--single {
        height: 40px;
    }
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css'>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>Files/add_profile_data">
                    <div class="card">
                        <div class="header">
                            <h3 class="title">Add Profile</h3>
                        </div>
                        <div class="content">
							
                            <h4 class="title">Label Tittle Here</h4>
                            <hr>
                            <h6><small><?php echo  date("l"); ?>&nbsp;,<?php echo date("d-Y"); ?>&nbsp;Time:<?php echo date("h:i:sa") ?></small></h6>
                            <br>

                            <div class="header">
                                <h4 class="title">Label Section Tittle Here</h4>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input required type="text" id="name" name="name" class="form-control" placeholder="Company">
                                        <div id="namelist"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <select required name="nationality" class="form-control select-search">
                                            <option disabled>
                                                select
                                            </option>
                                            <option value="dubai">Dubai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Gender</label>
                                        <select required name="gender" class="form-control">
                                            <option disabled>
                                                select
                                            </option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input required type="text" id="datepicker" class="form-control datepicker" name="dob" placeholder="Date of birth">

                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Citizenship Status</label>
                                        <select required name="citi_status" class="form-control  select-search">
                                            <option disabled>
                                                select
                                            </option>
                                            <option value="citizen status">status 1</option>
                                            <option value="citizen status">status 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Citizenship Location </label>
                                        <select required name="citi_location" class="form-control  select-search">
                                            <option disabled>
                                                select
                                            </option>
                                            <option value="city location">location</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Citizenship ID No:</label>
                                            <input type="number" onkeypress="return isNumber(event)" name="c_id" class="form-control" placeholder="Citizenship ID">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Citizenship UID No</label>
                                        <input type="number" onkeypress="return isNumber(event)" name="c_uid" class="form-control" placeholder="Citizenship UID">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Passport No: </label>
                                        <input type="text" id="passport_no" name="passport_no" class="form-control" placeholder="Passport No">
                                        <div id="pass_list"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Passport Type</label>
                                            <select required name="passport_type" class="form-control select-search">
                                                <option disabled>
                                                    select
                                                </option>
                                                <option value="passport type">Blaa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="title">Label Tittle3 Here</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Entry</label>
                                        <input required type="text" id="datepicker2" name="date_entry" class="form-control" placeholder="Date of Entry">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Profile Entered By</label>
                                        <select required name="profile_entered" class="form-control select-search">
                                            <option value="profile enetred">
                                                Valid Data
                                            </option>
                                            <option value="profile enetred">
                                                data 2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Client Bought By</label>
                                        <select required name="client_bought_by" class="form-control  select-search">
                                            <option value="cl bought by">
                                                Valid Data
                                            </option>
                                            <option value="cl bought by">
                                                bought by
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Client Enitity</label>
                                        <select required name="c_entity" class="form-control select-search">
                                            <option value="entity client">
                                                Valid Data
                                            </option>
                                            <option value="entity client">
                                                C entitit
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Client Entity Location</label>
                                        <select required name="client_location" class="form-control select-search">
                                            <option value="location client">
                                                Valid Data
                                            </option>
                                            <option value="location client">
                                                lcoation client
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="header">
                                <h4 class="title">Label 4</h4>
                                <hr>
                            </div>


                        </div>


                        <div class="row">
                            <div class="container">
                                <table id="kids" class="table  order-list">
                                    <tr>
                                        <td class="select">

                                            <label> Prod Type</label>
                                            <select name="pro_type[]" class="form-control">
                                                <?php foreach ($product as $x => $x_value) { ?>
                                                    <option value="<?php echo  $x_value ?>">
                                                        <?php echo $x ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td class="number">
                                            <label> Kg</label>
                                            <input type="number" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);" onkeypress="return isNumber(event)" name="kg[]" class="form-control" />
                                        </td>
                                        <td class="number">
                                            <label> G</label>
                                            <input type="number" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);" onkeypress="return isNumber(event)" maxlength="3" name="g[]" class="form-control" />
                                        </td>
                                        <td class="number">
                                            <label> ML</label>
                                            <input type="number" onkeypress="return isNumber(event)" onKeyDown="limitText(this,3);" onKeyUp="limitText(this,3);" name="ml[]" class="form-control" />
                                        </td>
                                        <td class="number">
                                            <label>Digit </label>
                                            <input type="number" onkeypress="return isNumber(event)" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" name="digit[]" class="form-control" />
                                        </td>
                                        <td class="select">

                                            <label> Shipped Type</label>
                                            <select name="s_type[]" class="form-control">
                                                <?php foreach ($ship_type as $x => $x_value) { ?>
                                                    <option value="<?php echo  $x_value ?>">
                                                        <?php echo $x ?>
                                                    </option>
                                                <?php } ?>
                                            </select>

                                        </td>
                                        <td class="select">

                                            <label> M- Type</label>
                                            <select name="m_type[]" class="form-control">
                                                <?php foreach ($manufacture_type as $x => $x_value) { ?>
                                                    <option value="<?php echo  $x_value ?>">
                                                        <?php echo $x ?>
                                                    </option>
                                                <?php } ?>
                                            </select>


                                        </td>
                                        </td>
                                        <td>

                                            <input type="button" style="margin-top: 25px; margin-left: 4px;" class="btn btn-sm btn-success" value="+" id="add_kid()_1" onclick="addkid()" />
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        <div class="header">
                            <h4 class="title">Label 5</h4>
                            <hr>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Shipping No</label>
                                    <input name="ship_no" type="text" max="5" class="form-control" placeholder="Shipping No">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Coming From</label>
                                    <select required name="from" class="form-control select-search">
                                        <option value="from">
                                            Valid Data
                                        </option>
                                        <option value="from">
                                            Valid From
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Going to </label>
                                    <select required name="going_to" class="form-control select-search">
                                        <option value="to">
                                            Valid Data
                                        </option>
                                        <option value="to">
                                            Valid To
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Final Destination </label>
                                    <select required name="final" class="form-control select-search">
                                        <option value="final">
                                            Valid Data
                                        </option>
                                        <option value="final">
                                            Valid Final
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h4 class="title">Label 6</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Note </label>
                                    <textarea rows="5" name="note" class="form-control" placeholder="Here can be your Note"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h4 class="title">Label 7</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input name="profile_picture"  accept="image/*;capture=camera" size="10" required type="file" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input name="product_image"  accept="image/*;capture=camera" size="10" required type="file" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Document</label>
                                    <input name="document"  accept="image/*;capture=camera" size="10" required type="file" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h4 class="title">Label 8</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> Record Status</label>
                                <select required name="r_status" class="form-control select-search">
                                    <option value="r status">
                                        Valid Data
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="header">
                            <h4 class="title">Label 9</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> Record Dept Transfer</label>
                                <select required name="r_transfer" class="form-control select-search">
                                    <option value="r transfer">
                                        Valid Data
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="header">
                            <h4 class="title">Label 10</h4>
                            <hr>
                        </div>
                        <input type="submit" name="submit" value="Preview" class="btn btn-success btn-fill pull-right">
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


