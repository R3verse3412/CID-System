<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Header -->
    <?php include "../../header.php"; ?>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../CSS/create_cid.css">
    <link rel="stylesheet" href="../CSS/frontdesk.css">
    <link rel="stylesheet" href="../CSS/cid.css">

    <title>Frontdesk Page</title>
</head>

<body>
    <div id="frontdesk_page">
        <div id="header">
            <img class="logo" src="../../Assets/Images/logo.png" alt="logo">
            <div id="notif_container">
                <div id="notif_icon_container" class="d-none">
                    <iconify-icon id="notif_icon" icon="mingcute:notification-line"></iconify-icon>
                    <div id="notif_dot">

                    </div>
                </div>
                <div id="notif_dropdown">
                    <div class="header_notification">Notifications</div>
                    <div class="notification">
                        <div class="checkbox-container">
                            <input class="form-check-input" type="checkbox" value="" id="message_checkbox1">
                        </div>
                        <img class="img_notification" id="notification_img" src="https://via.placeholder.com/50"
                            alt="Notification 1">
                        <p class="notification_text">Lorem ipsum dolor sit amet. Ex atque reiciendis At voluptate eius
                            non inventore voluptatum. Est dicta quas est officiis nesciunt et atque repudiandae aut
                            earum quasi est sunt incidunt.</p>
                    </div>
                    <div class="footer_see_all"><a href="Inbox.php">See All</a></div>
                </div>
                <!-- <img id="profile_pic" src="../../Assets/Images/logo.png" alt="logo"> -->
                <p id="tech_name"></p>

                <iconify-icon id="logout" icon="basil:logout-solid"></iconify-icon>
            </div>
        </div>
        <div id="greetings_header">
            <img id="group_pic" src="../../Assets/Images/Group.svg" alt="group_pic">
            <p id="greetings_text"></p>
            <button type="button" class="btn btn-primary btn_create" id="btn_create">
                CREATE
            </button>
        </div>
        <div id="dashboard_container">
            <div id="services">
                <p id="services_title" class="title">Services</p>
                <div id="services_container">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner service_container">
                            <div class="carousel-item active">
                                <div class="card_container">

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                            <iconify-icon class="prev_icon" icon="uiw:left"></iconify-icon>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                            <iconify-icon class="next_icon" icon="uiw:right"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
            <div id="technician_progress">
                <div id="technician_container">
                    <p id="technician_title" class="title">Technician</p>
                    <div class="card technician_progress_card">
                        <div class="card-body technician_ongoing_container">

                        </div>
                    </div>
                </div>
                <div id="progress_container">
                    <p id="progress_title" class="title">Progress</p>
                    <div class="card-body card" id="progress_card">

                        <div class="d-flex flex-row status" id="click_release">
                            <div class="col-2 icon_col">
                                <div class="icon_container">
                                    <iconify-icon icon="radix-icons:rocket" height="3em" style="color: #345AFD;">
                                    </iconify-icon>
                                </div>
                            </div>
                            <div class="col-2 number_col">
                                <div class="number_container">
                                    <p class="number_text" id="release_count"></p>
                                </div>
                            </div>
                            <div class="col-6 text_col">
                                <div class="text_container">
                                    <p class="text_content">Release</p>
                                </div>
                            </div>
                            <div class="col-1 text_col">
                                <div class="arrow_container">
                                    <iconify-icon icon="raphael:arrowright" width="1.2em" height="1.2em"
                                        style="color: A7A7A7"></iconify-icon>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row status" id="click_ongoing">
                            <div class="col-2 icon_col">
                                <div class="icon_container">
                                    <iconify-icon icon="uiw:reload" height="3em" style="color: #345AFD;"></iconify-icon>
                                </div>
                            </div>
                            <div class="col-2 number_col">
                                <div class="number_container">
                                    <p class="number_text" id="ongoing_count"></p>
                                </div>
                            </div>

                            <div class="col-6 text_col">
                                <div class="text_container">
                                    <p class="text_content">On&ndash;going</p>
                                </div>
                            </div>
                            <div class="col-1 text_col">
                                <div class="arrow_container">
                                    <iconify-icon icon="raphael:arrowright" width="1.2em" height="1.2em"
                                        style="color: A7A7A7"></iconify-icon>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row status" id="click_warranty">
                            <div class="col-2 icon_col">
                                <div class="icon_container">
                                    <iconify-icon icon="iconamoon:shield-yes-duotone" height="3em"
                                        style="color: #345AFD;"></iconify-icon>
                                </div>
                            </div>
                            <div class="col-2 number_col">
                                <div class="number_container">
                                    <p class="number_text" id="warranty_count"></p>
                                </div>
                            </div>
                            <div class="col-6 text_col">
                                <div class="text_container">
                                    <p class="text_content">Warranty</p>
                                </div>
                            </div>
                            <div class="col-1 text_col">
                                <div class="arrow_container">
                                    <iconify-icon icon="raphael:arrowright" width="1.2em" height="1.2em"
                                        style="color: A7A7A7"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="table_container">
                <div class="card">
                    <div class="card-body">
                        <table id="recent_cids_table" class="table table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>CID</th>
                                    <th>Client</th>
                                    <th>Technician</th>
                                    <th>Unit Details</th>
                                    <th>Status</th>
                                    <th>Date Added</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        // include "add_cid_modal.php"; 
        ?>

        <div class="modal fade" id="view_cid" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
                <div class="modal-content" id="cid_contents_container">

                </div>
            </div>
        </div>

        <div class="modal fade" id="claiming_slip_cid" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
                <div class="modal-content">
                    <div id="claiming_slip_container">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="logout_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header" id="logout_titled">
                        <h5 class="modal-title" id="logoutTitleId">Logout Confirmation</h5>
                    </div>
                    <div class="modal-body">Are you sure you want to log out from your account?</div>
                    <div class="modal-footer" id="logout_footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="logout_button">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/frontdesk.js"></script>
</body>

</html>