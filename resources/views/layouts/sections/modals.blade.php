<!-- Modal -->
<div class="modal fade creat-event" id="creat-event">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>CREATE EVENT</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="m-t-20">TITLE</label>
                                <input type="text" class="form-control" placeholder="Music Awards">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="m-t-20" for="exampleFormControlTextarea">DESCRIPTION</label>
                                <textarea class="form-control" id="exampleFormControlTextarea" placeholder="In eu urna enim. Cras hendrerit ullamcorper malesuada. In justo lacus, pharetra nec imperdiet sed, congue at metus. Mauris eleifend nec neque in pretium. Nulla eleifend, enim ultrices ultrices ullamcorper."
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <label class="m-t-20" for="exampleFormControlTextarea">DAY</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="15 June 2018">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="m-t-20" for="exampleFormControlTextarea">HOUR</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="10 am">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="m-t-20" for="exampleFormControlTextarea">MINUTE</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="15 m">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="m-t-20" for="exampleFormControlTextarea">DURATION</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value="2 h 45 m">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="m-t-20" for="exampleFormControlTextarea">LOCATION</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control b-r-0" value="New York City">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-crosshairs"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <label class="m-t-20">ADD SPONSORS</label>
                        <form class="search-area" action="#" method="post">
                            <input type="text" class="form-control" placeholder="Search Location">
                            <i class="fa fa-search"></i>
                        </form>

                        <div class="row">

                            <div class="col-md-12">
                                <label class="m-t-20" for="exampleFormControlTextarea">ADD GUEST</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control b-r-0" value="Search location">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="m-t-20" for="val-skill">SET REMINDER</label>
                                <select class="form-control" id="val-skill" name="val-skill">
                                    <option value="">Please select</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                </select>
                            </div>
                        </div>

                        <button class="btn btn-danger m-t-50">CREATE EVENT</button>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade evemt-view" id="evemt-view">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-lg-8 p-r-0">

                    <div class="card text-white m-b-0">
                        <img class="card-img" src="../assets/images/modal/event.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h2 class="m-t-5">Music Awards</h2>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-danger">CREAT</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 p-l-0">
                    <div class="card event-card box-0 m-b-0">
                        <div class="test">

                            <div class="card-header">
                                <div class="media">
                                    <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0">By John Doe</h3>
                                        <p>5 min ago</p>
                                    </div>

                                    <div class="dropdown custom-dropdown">
                                        <div data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>

                                </div>
                                <p class="m-t-10">Sed egestas mauris sit amet orci dignissim, vel pulvinar nisi faucibus. Duis gravida
                                    sem eu magna ornare, quis elementum lacus accumsan. Vestibulum eu efficitur nisl,
                                    in fringilla sapien.
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <h5>Date</h5>
                                        <p>June 16, 2018</p>
                                    </div>
                                    <div class="col-auto">
                                        <h5>Location</h5>
                                        <p>New York</p>
                                    </div>
                                    <div class="col-auto">
                                        <h5>Tickets</h5>
                                        <p>Avilable 26/ 100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-sponsor">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4>Sponsor by</h4>
                                        <div class="card-sponsor-img">
                                            <a href="#">
                                                <img class="img-fluid" src="../assets/images/events/card-foot1.png" alt="placeholder image">
                                            </a>
                                            <a href="#">
                                                <img class="img-fluid" src="../assets/images/events/card-foot2.png" alt="placeholder image">
                                            </a>
                                            <a href="#">
                                                <img class="img-fluid" src="../assets/images/events/card-foot3.png" alt="placeholder image">
                                            </a>
                                            <a href="#">
                                                <img class="img-fluid" src="../assets/images/events/card-foot4.png" alt="placeholder image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p>Free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>126
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>03
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pull-right">
                                    <a href="#">
                                        <i class="fa fa-bar-chart"></i>Insights</a>
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="media">
                                    <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0">By John Doe</h3>
                                        <p>5 min ago</p>
                                    </div>

                                    <div class="dropdown custom-dropdown">
                                        <div data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>

                                </div>
                                <p class="m-t-10">Integer id elementum tortor. Mauris quis.
                                </p>
                            </div>
                            <div class="card-header">
                                <div class="media">
                                    <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0">By John Doe</h3>
                                        <p>5 min ago</p>
                                    </div>

                                    <div class="dropdown custom-dropdown">
                                        <div data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>

                                </div>
                                <p class="m-t-10">Integer id elementum tortor. Mauris quis lobortis arcu. Cras hendrerit.
                                </p>
                            </div>
                        </div>

                        <div class="char-type">
                            <form class="d-flex justify-content-center" action="#" method="post">
                                <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                <input type="text" class="form-control mr-3" placeholder="Type Here...">
                                <button class="btn btn-danger">SEND</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>